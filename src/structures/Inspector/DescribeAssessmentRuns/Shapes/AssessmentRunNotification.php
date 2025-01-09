<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $date
 * @property 'ASSESSMENT_RUN_STARTED'|'ASSESSMENT_RUN_COMPLETED'|'ASSESSMENT_RUN_STATE_CHANGED'|'FINDING_REPORTED'|'OTHER' $event
 * @property string $message
 * @property bool $error
 * @property string $snsTopicArn
 * @property 'SUCCESS'|'TOPIC_DOES_NOT_EXIST'|'ACCESS_DENIED'|'INTERNAL_ERROR' $snsPublishStatusCode
 */
class AssessmentRunNotification extends Shape
{
    /**
     * @param array{
     *     date: \Aws\Api\DateTimeResult,
     *     event: 'ASSESSMENT_RUN_STARTED'|'ASSESSMENT_RUN_COMPLETED'|'ASSESSMENT_RUN_STATE_CHANGED'|'FINDING_REPORTED'|'OTHER',
     *     message?: string,
     *     error: bool,
     *     snsTopicArn?: string,
     *     snsPublishStatusCode?: 'SUCCESS'|'TOPIC_DOES_NOT_EXIST'|'ACCESS_DENIED'|'INTERNAL_ERROR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
