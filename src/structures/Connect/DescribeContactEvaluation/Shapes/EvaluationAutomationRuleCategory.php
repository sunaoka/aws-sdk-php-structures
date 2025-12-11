<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Category
 * @property 'PRESENT'|'NOT_PRESENT' $Condition
 * @property list<EvaluationTranscriptPointOfInterest>|null $PointsOfInterest
 */
class EvaluationAutomationRuleCategory extends Shape
{
    /**
     * @param array{
     *     Category: string,
     *     Condition: 'PRESENT'|'NOT_PRESENT',
     *     PointsOfInterest?: list<EvaluationTranscriptPointOfInterest>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
