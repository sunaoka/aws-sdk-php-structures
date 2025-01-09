<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeReplicationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 */
class DescribeReplicationConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
