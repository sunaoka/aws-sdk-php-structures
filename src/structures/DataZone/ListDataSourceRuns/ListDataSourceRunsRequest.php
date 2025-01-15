<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceIdentifier
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS'|null $status
 */
class ListDataSourceRunsRequest extends Request
{
    /**
     * @param array{
     *     dataSourceIdentifier: string,
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     status?: 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
