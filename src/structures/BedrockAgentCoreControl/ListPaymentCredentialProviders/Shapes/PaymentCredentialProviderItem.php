<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPaymentCredentialProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'CoinbaseCDP'|'StripePrivy' $credentialProviderVendor
 * @property string $credentialProviderArn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class PaymentCredentialProviderItem extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     credentialProviderVendor: 'CoinbaseCDP'|'StripePrivy',
     *     credentialProviderArn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
