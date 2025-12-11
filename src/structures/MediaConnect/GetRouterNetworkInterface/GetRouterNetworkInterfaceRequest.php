<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetRouterNetworkInterfaceRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
