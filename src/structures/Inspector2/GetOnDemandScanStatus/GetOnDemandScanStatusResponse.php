<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetOnDemandScanStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $scanId
 * @property string $resourceId
 * @property 'AMI' $resourceType
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED' $scanStatus
 * @property 'ACCESS_DENIED'|'INTERNAL_ERROR'|'STORAGE_LIMIT_EXCEEDED'|'EXTRACTION_COLLECTION_TIME_LIMIT_EXCEEDED'|'UNSUPPORTED_OS'|'RESOURCE_TERMINATED'|null $scanStatusReason
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 */
class GetOnDemandScanStatusResponse extends Response
{
}
