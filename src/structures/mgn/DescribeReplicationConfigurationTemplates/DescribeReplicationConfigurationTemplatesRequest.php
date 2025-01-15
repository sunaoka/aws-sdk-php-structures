<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeReplicationConfigurationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property list<string>|null $replicationConfigurationTemplateIDs
 */
class DescribeReplicationConfigurationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     replicationConfigurationTemplateIDs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
