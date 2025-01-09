<?php

namespace Sunaoka\Aws\Structures\AppRunner\DisassociateCustomDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcIngressConnectionArn
 * @property string $VpcId
 * @property string $DomainName
 */
class VpcDNSTarget extends Shape
{
    /**
     * @param array{
     *     VpcIngressConnectionArn?: string,
     *     VpcId?: string,
     *     DomainName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
