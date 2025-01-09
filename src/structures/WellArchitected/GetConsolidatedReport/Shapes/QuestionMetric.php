<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetConsolidatedReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QuestionId
 * @property 'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE' $Risk
 * @property list<BestPractice> $BestPractices
 */
class QuestionMetric extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string,
     *     Risk?: 'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE',
     *     BestPractices?: list<BestPractice>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
