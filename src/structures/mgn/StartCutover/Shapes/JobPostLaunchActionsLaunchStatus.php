<?php

namespace Sunaoka\Aws\Structures\mgn\StartCutover\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $executionID
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|null $executionStatus
 * @property string|null $failureReason
 * @property SsmDocument|null $ssmDocument
 * @property 'AUTOMATION'|'COMMAND'|null $ssmDocumentType
 */
class JobPostLaunchActionsLaunchStatus extends Shape
{
    /**
     * @param array{
     *     executionID?: string|null,
     *     executionStatus?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|null,
     *     failureReason?: string|null,
     *     ssmDocument?: SsmDocument|null,
     *     ssmDocumentType?: 'AUTOMATION'|'COMMAND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
