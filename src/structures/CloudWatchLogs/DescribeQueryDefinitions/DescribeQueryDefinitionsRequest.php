<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeQueryDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CWLI'|'SQL'|'PPL'|null $queryLanguage
 * @property string|null $queryDefinitionNamePrefix
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeQueryDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL'|null,
     *     queryDefinitionNamePrefix?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
