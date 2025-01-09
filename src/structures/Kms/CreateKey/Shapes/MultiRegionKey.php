<?php

namespace Sunaoka\Aws\Structures\Kms\CreateKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Region
 */
class MultiRegionKey extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
