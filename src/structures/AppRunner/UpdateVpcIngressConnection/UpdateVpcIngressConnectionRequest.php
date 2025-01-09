<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateVpcIngressConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcIngressConnectionArn
 * @property Shapes\IngressVpcConfiguration $IngressVpcConfiguration
 */
class UpdateVpcIngressConnectionRequest extends Request
{
    /**
     * @param array{
     *     VpcIngressConnectionArn: string,
     *     IngressVpcConfiguration: Shapes\IngressVpcConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
