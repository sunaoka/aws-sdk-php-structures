<?php

namespace Sunaoka\Aws\Structures\DataZone\ListMetadataGenerationRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|'PARTIALLY_SUCCEEDED'|null $status
 * @property 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null $type
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 * @property string|null $targetIdentifier
 */
class ListMetadataGenerationRunsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     status?: 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED'|'PARTIALLY_SUCCEEDED'|null,
     *     type?: 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     targetIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
