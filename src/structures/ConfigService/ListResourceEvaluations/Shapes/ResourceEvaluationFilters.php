<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListResourceEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETECTIVE'|'PROACTIVE'|null $EvaluationMode
 * @property TimeWindow|null $TimeWindow
 * @property string|null $EvaluationContextIdentifier
 */
class ResourceEvaluationFilters extends Shape
{
    /**
     * @param array{
     *     EvaluationMode?: 'DETECTIVE'|'PROACTIVE'|null,
     *     TimeWindow?: TimeWindow|null,
     *     EvaluationContextIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
