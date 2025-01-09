<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClassicLinkInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $InstanceIds
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeClassicLinkInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
