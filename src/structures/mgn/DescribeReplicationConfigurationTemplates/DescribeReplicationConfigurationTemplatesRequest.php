<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeReplicationConfigurationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $replicationConfigurationTemplateIDs
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeReplicationConfigurationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     replicationConfigurationTemplateIDs?: list<string>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
