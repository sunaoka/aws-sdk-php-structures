<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING' $Status
 * @property string $DocumentClassifierName
 * @property \Aws\Api\DateTimeResult $SubmitTimeBefore
 * @property \Aws\Api\DateTimeResult $SubmitTimeAfter
 */
class DocumentClassifierFilter extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING',
     *     DocumentClassifierName?: string,
     *     SubmitTimeBefore?: \Aws\Api\DateTimeResult,
     *     SubmitTimeAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
