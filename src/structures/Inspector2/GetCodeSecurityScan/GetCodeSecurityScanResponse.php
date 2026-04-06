<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityScan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $scanId
 * @property Shapes\CodeSecurityResource|null $resource
 * @property string|null $accountId
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'SKIPPED'|null $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $lastCommitId
 */
class GetCodeSecurityScanResponse extends Response
{
}
