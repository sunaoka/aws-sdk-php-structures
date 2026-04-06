<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $VolumeIds
 * @property bool|null $DryRun
 */
class DescribeVolumeStatusRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     VolumeIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
