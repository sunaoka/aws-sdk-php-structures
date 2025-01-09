<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeStandards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Company
 * @property string $Product
 */
class StandardsManagedBy extends Shape
{
    /**
     * @param array{
     *     Company?: string,
     *     Product?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
