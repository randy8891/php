<?php3

/**
 * @aurthor Randika Nonis
 * 
 */
  
interface PaymentGateway
{
    public function processPayment(float $amount, string $currency): bool;
    public function refundPaynent(float $amount, string $currency, string $reason): bool;
}

class Paypal implements PaymentGateway
{
    public function processPayment(float $amount, string $currency): bool
    {
        echo "Processing payment of $amount $currency through PayPal.\n";
        return true;
    }

    public function refundPayment(float $amount, string $currency, string $reason): bool
    {
        echo "Refunding payment of $amount $currency through PayPal. Reason: $reason.\n";
        return true;
    }
}

class Stripe implements PaymentGateway
{
    public function processPayment(float $amount, string $currency): bool
    {
        echo "Processing payment of $amount $currency through Stripe.\n";
        return true;
    }

    public function refundPayment(float $amount, string $currency, string $reason): bool
    {
        echo "Refunding payment of $amount $currency through Stripe. Reason: $reason.\n";
        return true;
    }
}


class PaymentProcessor
{
    private PaymentGateway $gateway;

    public function __construct(PaymentGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function makePayment(float $amount, string $currency): bool
    {
        return $this->gateway->processPayment($amount, $currency);
    }

    public function refundPayment(float $amount, string $currency, string $reason): bool
    {
        return $this->gateway->refundPayment($amount, $currency, $reason);
    }
}
