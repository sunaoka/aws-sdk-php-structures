<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Name
 * @property Shapes\RouterNetworkInterfaceConfiguration|null $Configuration
 */
class UpdateRouterNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string|null,
     *     Configuration?: Shapes\RouterNetworkInterfaceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
