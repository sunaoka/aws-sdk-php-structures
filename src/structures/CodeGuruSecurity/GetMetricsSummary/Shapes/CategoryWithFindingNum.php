<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $categoryName
 * @property int $findingNumber
 */
class CategoryWithFindingNum extends Shape
{
    /**
     * @param array{
     *     categoryName?: string,
     *     findingNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
