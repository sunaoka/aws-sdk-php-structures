<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentCredentialProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $credentialProviderArn
 * @property 'CoinbaseCDP'|'StripePrivy' $credentialProviderVendor
 * @property Shapes\PaymentProviderConfigurationOutput $providerConfigurationOutput
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property array<string, string>|null $tags
 */
class GetPaymentCredentialProviderResponse extends Response
{
}
