<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindingStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'groupKey'|'count' $attributeName
 * @property 'ASC'|'DESC' $orderBy
 */
class FindingStatisticsSortCriteria extends Shape
{
    /**
     * @param array{
     *     attributeName?: 'groupKey'|'count',
     *     orderBy?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
