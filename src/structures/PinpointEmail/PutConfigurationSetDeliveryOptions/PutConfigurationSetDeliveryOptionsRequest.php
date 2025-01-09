<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutConfigurationSetDeliveryOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property 'REQUIRE'|'OPTIONAL' $TlsPolicy
 * @property string $SendingPoolName
 */
class PutConfigurationSetDeliveryOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     TlsPolicy?: 'REQUIRE'|'OPTIONAL',
     *     SendingPoolName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
