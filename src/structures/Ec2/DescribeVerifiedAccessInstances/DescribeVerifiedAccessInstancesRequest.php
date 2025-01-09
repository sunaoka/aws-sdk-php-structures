<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VerifiedAccessInstanceIds
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class DescribeVerifiedAccessInstancesRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceIds?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
