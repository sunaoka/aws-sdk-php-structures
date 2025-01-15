<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING'|null $Status
 * @property string|null $RecognizerName
 * @property \Aws\Api\DateTimeResult|null $SubmitTimeBefore
 * @property \Aws\Api\DateTimeResult|null $SubmitTimeAfter
 */
class EntityRecognizerFilter extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING'|null,
     *     RecognizerName?: string|null,
     *     SubmitTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     SubmitTimeAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
