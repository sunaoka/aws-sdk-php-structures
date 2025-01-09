<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportImageTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $ExportImageTaskIds
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class DescribeExportImageTasksRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     ExportImageTaskIds?: list<string>,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
