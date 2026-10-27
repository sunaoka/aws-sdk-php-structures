<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterSourceEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RegionName
 * @property string|null $Description
 * @property Shapes\SourceEndpointConfiguration $Configuration
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class RegisterSourceEndpointRequest extends Request
{
    /**
     * @param array{
     *     RegionName?: string|null,
     *     Description?: string|null,
     *     Configuration: Shapes\SourceEndpointConfiguration,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
