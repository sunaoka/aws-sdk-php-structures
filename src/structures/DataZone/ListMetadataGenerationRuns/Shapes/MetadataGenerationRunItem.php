<?php

namespace Sunaoka\Aws\Structures\DataZone\ListMetadataGenerationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string $domainId
 * @property string $id
 * @property string $owningProjectId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|'PARTIALLY_SUCCEEDED'|null $status
 * @property MetadataGenerationRunTarget|null $target
 * @property 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null $type
 * @property list<'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'>|null $types
 */
class MetadataGenerationRunItem extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     domainId: string,
     *     id: string,
     *     owningProjectId: string,
     *     status?: 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|'PARTIALLY_SUCCEEDED'|null,
     *     target?: MetadataGenerationRunTarget|null,
     *     type?: 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null,
     *     types?: list<'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
