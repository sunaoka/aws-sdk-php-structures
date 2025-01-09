<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Freshness
 * @property int<1, 10> $Importance
 * @property string $Duration
 * @property 'ASCENDING'|'DESCENDING' $RankOrder
 * @property array<string, int<1, 10>> $ValueImportanceMap
 */
class Relevance extends Shape
{
    /**
     * @param array{
     *     Freshness?: bool,
     *     Importance?: int<1, 10>,
     *     Duration?: string,
     *     RankOrder?: 'ASCENDING'|'DESCENDING',
     *     ValueImportanceMap?: array<string, int<1, 10>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
