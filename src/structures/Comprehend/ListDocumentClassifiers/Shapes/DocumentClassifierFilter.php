<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING'|null $Status
 * @property string|null $DocumentClassifierName
 * @property \Aws\Api\DateTimeResult|null $SubmitTimeBefore
 * @property \Aws\Api\DateTimeResult|null $SubmitTimeAfter
 */
class DocumentClassifierFilter extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING'|null,
     *     DocumentClassifierName?: string|null,
     *     SubmitTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     SubmitTimeAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
