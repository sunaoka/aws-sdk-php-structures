<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterDestinationEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property Shapes\DestinationEndpointConfiguration $Configuration
 * @property string|null $RegionName
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class RegisterDestinationEndpointRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Configuration: Shapes\DestinationEndpointConfiguration,
     *     RegionName?: string|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
