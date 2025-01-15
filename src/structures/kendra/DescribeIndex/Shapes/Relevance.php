<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Freshness
 * @property int<1, 10>|null $Importance
 * @property string|null $Duration
 * @property 'ASCENDING'|'DESCENDING'|null $RankOrder
 * @property array<string, int<1, 10>>|null $ValueImportanceMap
 */
class Relevance extends Shape
{
    /**
     * @param array{
     *     Freshness?: bool|null,
     *     Importance?: int<1, 10>|null,
     *     Duration?: string|null,
     *     RankOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     ValueImportanceMap?: array<string, int<1, 10>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
