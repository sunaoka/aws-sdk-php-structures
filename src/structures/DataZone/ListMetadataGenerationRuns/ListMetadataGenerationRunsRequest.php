<?php

namespace Sunaoka\Aws\Structures\DataZone\ListMetadataGenerationRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int $maxResults
 * @property string $nextToken
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED' $status
 * @property 'BUSINESS_DESCRIPTIONS' $type
 */
class ListMetadataGenerationRunsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     status?: 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED',
     *     type?: 'BUSINESS_DESCRIPTIONS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
