<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutConfigurationSetDeliveryOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property 'REQUIRE'|'OPTIONAL'|null $TlsPolicy
 * @property string|null $SendingPoolName
 */
class PutConfigurationSetDeliveryOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     TlsPolicy?: 'REQUIRE'|'OPTIONAL'|null,
     *     SendingPoolName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
