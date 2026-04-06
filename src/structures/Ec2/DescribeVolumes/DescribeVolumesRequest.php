<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $VolumeIds
 * @property bool|null $DryRun
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeVolumesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     VolumeIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
