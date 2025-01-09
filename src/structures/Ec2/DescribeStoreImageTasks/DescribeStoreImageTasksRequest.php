<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStoreImageTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ImageIds
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int<1, 200> $MaxResults
 */
class DescribeStoreImageTasksRequest extends Request
{
    /**
     * @param array{
     *     ImageIds?: list<string>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 200>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
