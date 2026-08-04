<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InstanceIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class DescribeApplicationStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
