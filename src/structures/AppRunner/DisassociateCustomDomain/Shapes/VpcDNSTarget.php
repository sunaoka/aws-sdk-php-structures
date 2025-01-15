<?php

namespace Sunaoka\Aws\Structures\AppRunner\DisassociateCustomDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcIngressConnectionArn
 * @property string|null $VpcId
 * @property string|null $DomainName
 */
class VpcDNSTarget extends Shape
{
    /**
     * @param array{
     *     VpcIngressConnectionArn?: string|null,
     *     VpcId?: string|null,
     *     DomainName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
