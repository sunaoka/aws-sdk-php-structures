<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrBlocks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CidrBlock
 * @property string|null $LocationName
 */
class CidrBlockSummary extends Shape
{
    /**
     * @param array{
     *     CidrBlock?: string|null,
     *     LocationName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
