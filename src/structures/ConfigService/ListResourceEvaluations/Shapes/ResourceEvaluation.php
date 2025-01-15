<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListResourceEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceEvaluationId
 * @property 'DETECTIVE'|'PROACTIVE'|null $EvaluationMode
 * @property \Aws\Api\DateTimeResult|null $EvaluationStartTimestamp
 */
class ResourceEvaluation extends Shape
{
    /**
     * @param array{
     *     ResourceEvaluationId?: string|null,
     *     EvaluationMode?: 'DETECTIVE'|'PROACTIVE'|null,
     *     EvaluationStartTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
