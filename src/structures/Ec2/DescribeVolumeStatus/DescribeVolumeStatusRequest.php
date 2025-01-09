<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<string> $VolumeIds
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 */
class DescribeVolumeStatusRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     VolumeIds?: list<string>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
