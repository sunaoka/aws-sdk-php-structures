<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateVpcIngressConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 * @property string $VpcIngressConnectionName
 * @property Shapes\IngressVpcConfiguration $IngressVpcConfiguration
 * @property list<Shapes\Tag> $Tags
 */
class CreateVpcIngressConnectionRequest extends Request
{
    /**
     * @param array{
     *     ServiceArn: string,
     *     VpcIngressConnectionName: string,
     *     IngressVpcConfiguration: Shapes\IngressVpcConfiguration,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
