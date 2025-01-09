<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeVpcIngressConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcIngressConnectionArn
 */
class DescribeVpcIngressConnectionRequest extends Request
{
    /**
     * @param array{VpcIngressConnectionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
