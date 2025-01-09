<?php

namespace Sunaoka\Aws\Structures\kendra\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Freshness
 * @property int $Importance
 * @property string $Duration
 * @property 'ASCENDING'|'DESCENDING' $RankOrder
 * @property array<string, int> $ValueImportanceMap
 */
class Relevance extends Shape
{
    /**
     * @param array{
     *     Freshness?: bool,
     *     Importance?: int,
     *     Duration?: string,
     *     RankOrder?: 'ASCENDING'|'DESCENDING',
     *     ValueImportanceMap?: array<string, int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
