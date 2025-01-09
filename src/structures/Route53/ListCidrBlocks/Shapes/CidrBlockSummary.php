<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrBlocks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrBlock
 * @property string $LocationName
 */
class CidrBlockSummary extends Shape
{
    /**
     * @param array{
     *     CidrBlock?: string,
     *     LocationName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
