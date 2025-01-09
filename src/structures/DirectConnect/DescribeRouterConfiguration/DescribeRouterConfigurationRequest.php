<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeRouterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property string $routerTypeIdentifier
 */
class DescribeRouterConfigurationRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId: string,
     *     routerTypeIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
