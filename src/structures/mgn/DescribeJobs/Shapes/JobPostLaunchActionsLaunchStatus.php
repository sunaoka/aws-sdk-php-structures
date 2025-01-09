<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionID
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED' $executionStatus
 * @property string $failureReason
 * @property SsmDocument $ssmDocument
 * @property 'AUTOMATION'|'COMMAND' $ssmDocumentType
 */
class JobPostLaunchActionsLaunchStatus extends Shape
{
    /**
     * @param array{
     *     executionID?: string,
     *     executionStatus?: 'IN_PROGRESS'|'SUCCESS'|'FAILED',
     *     failureReason?: string,
     *     ssmDocument?: SsmDocument,
     *     ssmDocumentType?: 'AUTOMATION'|'COMMAND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
