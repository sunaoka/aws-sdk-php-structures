<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetConsolidatedReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuestionId
 * @property 'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE'|null $Risk
 * @property list<BestPractice>|null $BestPractices
 */
class QuestionMetric extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string|null,
     *     Risk?: 'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE'|null,
     *     BestPractices?: list<BestPractice>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
