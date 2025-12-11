<?php

namespace Sunaoka\Aws\Structures\mgn\StartTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SsmDocument|null $ssmDocument
 * @property 'AUTOMATION'|'COMMAND'|null $ssmDocumentType
 * @property string|null $executionID
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|null $executionStatus
 * @property string|null $failureReason
 */
class JobPostLaunchActionsLaunchStatus extends Shape
{
    /**
     * @param array{
     *     ssmDocument?: SsmDocument|null,
     *     ssmDocumentType?: 'AUTOMATION'|'COMMAND'|null,
     *     executionID?: string|null,
     *     executionStatus?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
