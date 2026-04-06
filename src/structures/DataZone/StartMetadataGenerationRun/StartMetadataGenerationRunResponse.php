<?php

namespace Sunaoka\Aws\Structures\DataZone\StartMetadataGenerationRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $id
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|'PARTIALLY_SUCCEEDED'|null $status
 * @property 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null $type
 * @property list<'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'>|null $types
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $owningProjectId
 */
class StartMetadataGenerationRunResponse extends Response
{
}
