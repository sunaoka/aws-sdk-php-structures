<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceImageMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $InstanceIds
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class DescribeInstanceImageMetadataRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     InstanceIds?: list<string>|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
