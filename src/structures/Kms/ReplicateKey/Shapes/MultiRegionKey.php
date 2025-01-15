<?php

namespace Sunaoka\Aws\Structures\Kms\ReplicateKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Region
 */
class MultiRegionKey extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
