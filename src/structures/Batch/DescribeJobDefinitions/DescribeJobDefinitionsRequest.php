<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $jobDefinitions
 * @property int|null $maxResults
 * @property string|null $jobDefinitionName
 * @property string|null $status
 * @property string|null $nextToken
 */
class DescribeJobDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     jobDefinitions?: list<string>|null,
     *     maxResults?: int|null,
     *     jobDefinitionName?: string|null,
     *     status?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
