<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePaymentCredentialProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property 'CoinbaseCDP'|'StripePrivy' $credentialProviderVendor
 * @property string $credentialProviderArn
 * @property Shapes\PaymentProviderConfigurationOutput $providerConfigurationOutput
 */
class CreatePaymentCredentialProviderResponse extends Response
{
}
