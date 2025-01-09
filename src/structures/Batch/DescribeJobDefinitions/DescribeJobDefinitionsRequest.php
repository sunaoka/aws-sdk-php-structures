<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $jobDefinitions
 * @property int $maxResults
 * @property string $jobDefinitionName
 * @property string $status
 * @property string $nextToken
 */
class DescribeJobDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     jobDefinitions?: list<string>,
     *     maxResults?: int,
     *     jobDefinitionName?: string,
     *     status?: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
