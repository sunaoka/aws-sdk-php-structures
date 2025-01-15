<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportImageTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $ExportImageTaskIds
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeExportImageTasksRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     ExportImageTaskIds?: list<string>|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
