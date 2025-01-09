<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $Ipv6CidrBlock
 * @property string $CidrBlockState
 */
class Ipv6CidrBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     Ipv6CidrBlock?: string,
     *     CidrBlockState?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
