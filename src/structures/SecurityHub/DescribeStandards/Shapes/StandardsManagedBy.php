<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeStandards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Company
 * @property string|null $Product
 */
class StandardsManagedBy extends Shape
{
    /**
     * @param array{
     *     Company?: string|null,
     *     Product?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
