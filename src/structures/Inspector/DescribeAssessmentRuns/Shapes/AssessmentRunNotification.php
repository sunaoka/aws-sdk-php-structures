<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $date
 * @property 'ASSESSMENT_RUN_STARTED'|'ASSESSMENT_RUN_COMPLETED'|'ASSESSMENT_RUN_STATE_CHANGED'|'FINDING_REPORTED'|'OTHER' $event
 * @property string|null $message
 * @property bool $error
 * @property string|null $snsTopicArn
 * @property 'SUCCESS'|'TOPIC_DOES_NOT_EXIST'|'ACCESS_DENIED'|'INTERNAL_ERROR'|null $snsPublishStatusCode
 */
class AssessmentRunNotification extends Shape
{
    /**
     * @param array{
     *     date: \Aws\Api\DateTimeResult,
     *     event: 'ASSESSMENT_RUN_STARTED'|'ASSESSMENT_RUN_COMPLETED'|'ASSESSMENT_RUN_STATE_CHANGED'|'FINDING_REPORTED'|'OTHER',
     *     message?: string|null,
     *     error: bool,
     *     snsTopicArn?: string|null,
     *     snsPublishStatusCode?: 'SUCCESS'|'TOPIC_DOES_NOT_EXIST'|'ACCESS_DENIED'|'INTERNAL_ERROR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
