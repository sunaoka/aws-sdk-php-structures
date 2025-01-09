<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteVpcIngressConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcIngressConnectionArn
 */
class DeleteVpcIngressConnectionRequest extends Request
{
    /**
     * @param array{VpcIngressConnectionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
