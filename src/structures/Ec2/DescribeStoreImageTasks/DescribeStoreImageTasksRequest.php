<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStoreImageTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ImageIds
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 200>|null $MaxResults
 */
class DescribeStoreImageTasksRequest extends Request
{
    /**
     * @param array{
     *     ImageIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
