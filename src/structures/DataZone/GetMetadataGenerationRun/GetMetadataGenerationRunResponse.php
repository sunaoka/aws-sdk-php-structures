<?php

namespace Sunaoka\Aws\Structures\DataZone\GetMetadataGenerationRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $id
 * @property Shapes\MetadataGenerationRunTarget|null $target
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|'PARTIALLY_SUCCEEDED'|null $status
 * @property 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null $type
 * @property list<'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'>|null $types
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string $owningProjectId
 * @property list<Shapes\MetadataGenerationRunTypeStat>|null $typeStats
 */
class GetMetadataGenerationRunResponse extends Response
{
}
