<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 */
class ResourcePolicySummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
