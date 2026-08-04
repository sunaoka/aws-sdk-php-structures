<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ok'|'impaired'|'initializing'|'insufficient-data'|'not-applicable'|'suppressed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StatusTimeStamp
 * @property \Aws\Api\DateTimeResult|null $StatusSince
 * @property \Aws\Api\DateTimeResult|null $ResumeAt
 * @property list<ApplicationStatusDetail>|null $Details
 */
class ApplicationStatus extends Shape
{
    /**
     * @param array{
     *     Status?: 'ok'|'impaired'|'initializing'|'insufficient-data'|'not-applicable'|'suppressed'|null,
     *     StatusTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     StatusSince?: \Aws\Api\DateTimeResult|null,
     *     ResumeAt?: \Aws\Api\DateTimeResult|null,
     *     Details?: list<ApplicationStatusDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
