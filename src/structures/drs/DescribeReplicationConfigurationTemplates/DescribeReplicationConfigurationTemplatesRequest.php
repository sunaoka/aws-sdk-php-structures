<?php

namespace Sunaoka\Aws\Structures\drs\DescribeReplicationConfigurationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 * @property list<string>|null $replicationConfigurationTemplateIDs
 */
class DescribeReplicationConfigurationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null,
     *     replicationConfigurationTemplateIDs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
