<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentCredentialProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property 'CoinbaseCDP'|'StripePrivy' $credentialProviderVendor
 * @property string $credentialProviderArn
 * @property Shapes\PaymentProviderConfigurationOutput $providerConfigurationOutput
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class UpdatePaymentCredentialProviderResponse extends Response
{
}
