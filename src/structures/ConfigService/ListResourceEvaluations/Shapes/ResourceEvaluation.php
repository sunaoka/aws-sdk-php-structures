<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListResourceEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceEvaluationId
 * @property 'DETECTIVE'|'PROACTIVE' $EvaluationMode
 * @property \Aws\Api\DateTimeResult $EvaluationStartTimestamp
 */
class ResourceEvaluation extends Shape
{
    /**
     * @param array{
     *     ResourceEvaluationId?: string,
     *     EvaluationMode?: 'DETECTIVE'|'PROACTIVE',
     *     EvaluationStartTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
