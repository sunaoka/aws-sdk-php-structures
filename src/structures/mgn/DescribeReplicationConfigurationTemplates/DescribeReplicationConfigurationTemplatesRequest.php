<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeReplicationConfigurationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property list<string> $replicationConfigurationTemplateIDs
 */
class DescribeReplicationConfigurationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     replicationConfigurationTemplateIDs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
