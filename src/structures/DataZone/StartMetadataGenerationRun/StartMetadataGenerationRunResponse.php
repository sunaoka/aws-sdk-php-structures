<?php

namespace Sunaoka\Aws\Structures\DataZone\StartMetadataGenerationRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property string $id
 * @property string $owningProjectId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED' $status
 * @property 'BUSINESS_DESCRIPTIONS' $type
 */
class StartMetadataGenerationRunResponse extends Response
{
}
