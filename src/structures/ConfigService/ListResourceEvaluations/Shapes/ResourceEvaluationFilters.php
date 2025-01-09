<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListResourceEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETECTIVE'|'PROACTIVE' $EvaluationMode
 * @property TimeWindow $TimeWindow
 * @property string $EvaluationContextIdentifier
 */
class ResourceEvaluationFilters extends Shape
{
    /**
     * @param array{
     *     EvaluationMode?: 'DETECTIVE'|'PROACTIVE',
     *     TimeWindow?: TimeWindow,
     *     EvaluationContextIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
