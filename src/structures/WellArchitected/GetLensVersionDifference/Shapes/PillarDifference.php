<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensVersionDifference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PillarId
 * @property string|null $PillarName
 * @property 'UPDATED'|'NEW'|'DELETED'|null $DifferenceStatus
 * @property list<QuestionDifference>|null $QuestionDifferences
 */
class PillarDifference extends Shape
{
    /**
     * @param array{
     *     PillarId?: string|null,
     *     PillarName?: string|null,
     *     DifferenceStatus?: 'UPDATED'|'NEW'|'DELETED'|null,
     *     QuestionDifferences?: list<QuestionDifference>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
