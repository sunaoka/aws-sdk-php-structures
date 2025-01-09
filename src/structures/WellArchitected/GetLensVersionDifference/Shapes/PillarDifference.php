<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensVersionDifference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PillarId
 * @property string $PillarName
 * @property 'UPDATED'|'NEW'|'DELETED' $DifferenceStatus
 * @property list<QuestionDifference> $QuestionDifferences
 */
class PillarDifference extends Shape
{
    /**
     * @param array{
     *     PillarId?: string,
     *     PillarName?: string,
     *     DifferenceStatus?: 'UPDATED'|'NEW'|'DELETED',
     *     QuestionDifferences?: list<QuestionDifference>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
