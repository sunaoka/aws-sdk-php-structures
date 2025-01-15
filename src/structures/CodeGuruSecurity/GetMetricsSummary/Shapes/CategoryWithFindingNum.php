<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $categoryName
 * @property int|null $findingNumber
 */
class CategoryWithFindingNum extends Shape
{
    /**
     * @param array{
     *     categoryName?: string|null,
     *     findingNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
