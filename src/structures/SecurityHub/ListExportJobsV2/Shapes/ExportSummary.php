<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExportJobsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExportJobId
 * @property string|null $Name
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED' $Status
 * @property 'FINDINGS' $DataType
 * @property ExportOutputSummary|null $OutputConfiguration
 * @property ExportScopes|null $Scopes
 * @property ExportDestination $Destination
 * @property 'ACCESS_DENIED'|'RESOURCE_NOT_FOUND'|'INTERNAL_ERROR'|null $FailureCode
 * @property string|null $FailureMessage
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 */
class ExportSummary extends Shape
{
    /**
     * @param array{
     *     ExportJobId: string,
     *     Name?: string|null,
     *     Status: 'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED',
     *     DataType: 'FINDINGS',
     *     OutputConfiguration?: ExportOutputSummary|null,
     *     Scopes?: ExportScopes|null,
     *     Destination: ExportDestination,
     *     FailureCode?: 'ACCESS_DENIED'|'RESOURCE_NOT_FOUND'|'INTERNAL_ERROR'|null,
     *     FailureMessage?: string|null,
     *     StartedAt: \Aws\Api\DateTimeResult,
     *     EndedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
