<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindingStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'groupKey'|'count'|null $attributeName
 * @property 'ASC'|'DESC'|null $orderBy
 */
class FindingStatisticsSortCriteria extends Shape
{
    /**
     * @param array{
     *     attributeName?: 'groupKey'|'count'|null,
     *     orderBy?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
