<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImportSnapshotTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $ImportTaskIds
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeImportSnapshotTasksRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     ImportTaskIds?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
