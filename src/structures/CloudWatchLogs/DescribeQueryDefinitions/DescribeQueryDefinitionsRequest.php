<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeQueryDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CWLI'|'SQL'|'PPL' $queryLanguage
 * @property string $queryDefinitionNamePrefix
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeQueryDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL',
     *     queryDefinitionNamePrefix?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
