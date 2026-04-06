<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $VolumeIds
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeVolumeStatusRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     VolumeIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
