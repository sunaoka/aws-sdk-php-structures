<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImportSnapshotTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $ImportTaskIds
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeImportSnapshotTasksRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     ImportTaskIds?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
