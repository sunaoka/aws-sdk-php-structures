<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeReplicationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FileSystemId
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class DescribeReplicationConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
