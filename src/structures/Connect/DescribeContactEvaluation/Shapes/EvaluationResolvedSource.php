<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormItemEnablementSource $Source
 * @property 'PENDING'|'RESOLVED'|'FAILED' $Status
 * @property list<EvaluationFormItemEnablementSourceValue>|null $Values
 */
class EvaluationResolvedSource extends Shape
{
    /**
     * @param array{
     *     Source: EvaluationFormItemEnablementSource,
     *     Status: 'PENDING'|'RESOLVED'|'FAILED',
     *     Values?: list<EvaluationFormItemEnablementSourceValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
