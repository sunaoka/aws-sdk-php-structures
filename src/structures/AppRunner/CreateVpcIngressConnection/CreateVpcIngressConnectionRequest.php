<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateVpcIngressConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 * @property string $VpcIngressConnectionName
 * @property Shapes\IngressVpcConfiguration $IngressVpcConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateVpcIngressConnectionRequest extends Request
{
    /**
     * @param array{
     *     ServiceArn: string,
     *     VpcIngressConnectionName: string,
     *     IngressVpcConfiguration: Shapes\IngressVpcConfiguration,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
