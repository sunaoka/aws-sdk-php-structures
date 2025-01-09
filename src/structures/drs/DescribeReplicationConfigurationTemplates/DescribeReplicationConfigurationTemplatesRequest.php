<?php

namespace Sunaoka\Aws\Structures\drs\DescribeReplicationConfigurationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $maxResults
 * @property string $nextToken
 * @property list<string> $replicationConfigurationTemplateIDs
 */
class DescribeReplicationConfigurationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, max>,
     *     nextToken?: string,
     *     replicationConfigurationTemplateIDs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
