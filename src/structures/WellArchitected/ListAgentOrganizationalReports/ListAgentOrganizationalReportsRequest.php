<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentOrganizationalReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'DISCOVERING'|'SNAPSHOTTING'|'AGGREGATING'|'COMPRESSING'|'COMPLETED'|'FAILED'|'DELETING'|null $state
 */
class ListAgentOrganizationalReportsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     state?: 'DISCOVERING'|'SNAPSHOTTING'|'AGGREGATING'|'COMPRESSING'|'COMPLETED'|'FAILED'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
