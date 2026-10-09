<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetExportJobV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ExportJobId
 * @property string|null $Name
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED' $Status
 * @property 'FINDINGS' $DataType
 * @property Shapes\ExportOutput|null $OutputConfiguration
 * @property Shapes\ExportScopes|null $Scopes
 * @property Shapes\ExportDestination $Destination
 * @property 'ACCESS_DENIED'|'RESOURCE_NOT_FOUND'|'INTERNAL_ERROR'|null $FailureCode
 * @property string|null $FailureMessage
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 */
class GetExportJobV2Response extends Response
{
}
