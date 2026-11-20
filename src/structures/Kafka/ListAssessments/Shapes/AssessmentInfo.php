<?php

namespace Sunaoka\Aws\Structures\Kafka\ListAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssessmentArn
 * @property 'UPDATE_BROKER_TYPE'|null $AssessmentType
 * @property string|null $ClusterArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'DELETING'|null $Status
 * @property array<string, string>|null $Tags
 */
class AssessmentInfo extends Shape
{
    /**
     * @param array{
     *     AssessmentArn?: string|null,
     *     AssessmentType?: 'UPDATE_BROKER_TYPE'|null,
     *     ClusterArn?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'DELETING'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
