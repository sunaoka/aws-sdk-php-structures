<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $CidrBlock
 * @property string $CidrBlockState
 */
class CidrBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     CidrBlock?: string,
     *     CidrBlockState?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
