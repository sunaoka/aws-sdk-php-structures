<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceImageMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $InstanceIds
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeInstanceImageMetadataRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     InstanceIds?: list<string>,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
