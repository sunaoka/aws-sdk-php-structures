<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceCreditSpecifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $InstanceIds
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeInstanceCreditSpecificationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     InstanceIds?: list<string>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
