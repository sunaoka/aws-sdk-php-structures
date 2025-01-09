<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListFindingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attributeName
 * @property 'ASC'|'DESC' $orderBy
 */
class SortCriteria extends Shape
{
    /**
     * @param array{
     *     attributeName?: string,
     *     orderBy?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
