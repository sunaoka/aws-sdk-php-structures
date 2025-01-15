<?php

namespace Sunaoka\Aws\Structures\DataZone\GetMetadataGenerationRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string $domainId
 * @property string $id
 * @property string $owningProjectId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|null $status
 * @property Shapes\MetadataGenerationRunTarget|null $target
 * @property 'BUSINESS_DESCRIPTIONS'|null $type
 */
class GetMetadataGenerationRunResponse extends Response
{
}
