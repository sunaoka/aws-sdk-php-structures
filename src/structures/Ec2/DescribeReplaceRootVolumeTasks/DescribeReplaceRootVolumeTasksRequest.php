<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReplaceRootVolumeTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ReplaceRootVolumeTaskIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class DescribeReplaceRootVolumeTasksRequest extends Request
{
    /**
     * @param array{
     *     ReplaceRootVolumeTaskIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
