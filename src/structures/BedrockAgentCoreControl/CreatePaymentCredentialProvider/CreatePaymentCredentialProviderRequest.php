<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePaymentCredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'CoinbaseCDP'|'StripePrivy' $credentialProviderVendor
 * @property Shapes\PaymentProviderConfigurationInput $providerConfigurationInput
 * @property array<string, string>|null $tags
 */
class CreatePaymentCredentialProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     credentialProviderVendor: 'CoinbaseCDP'|'StripePrivy',
     *     providerConfigurationInput: Shapes\PaymentProviderConfigurationInput,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
