<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReplaceRootVolumeTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ReplaceRootVolumeTaskIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeReplaceRootVolumeTasksRequest extends Request
{
    /**
     * @param array{
     *     ReplaceRootVolumeTaskIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
