<?php

namespace Sunaoka\Aws\Structures\DataZone\StartMetadataGenerationRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string $domainId
 * @property string $id
 * @property string|null $owningProjectId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|null $status
 * @property 'BUSINESS_DESCRIPTIONS'|null $type
 */
class StartMetadataGenerationRunResponse extends Response
{
}
