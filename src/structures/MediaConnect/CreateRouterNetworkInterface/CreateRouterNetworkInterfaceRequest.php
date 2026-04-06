<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\RouterNetworkInterfaceConfiguration $Configuration
 * @property string|null $RegionName
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateRouterNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Configuration: Shapes\RouterNetworkInterfaceConfiguration,
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
