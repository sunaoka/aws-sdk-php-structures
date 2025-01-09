<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceCreditSpecifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $InstanceIds
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeInstanceCreditSpecificationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     InstanceIds?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
