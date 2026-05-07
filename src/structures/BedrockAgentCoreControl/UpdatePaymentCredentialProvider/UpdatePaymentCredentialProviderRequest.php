<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentCredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'CoinbaseCDP'|'StripePrivy' $credentialProviderVendor
 * @property Shapes\PaymentProviderConfigurationInput $providerConfigurationInput
 */
class UpdatePaymentCredentialProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     credentialProviderVendor: 'CoinbaseCDP'|'StripePrivy',
     *     providerConfigurationInput: Shapes\PaymentProviderConfigurationInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
