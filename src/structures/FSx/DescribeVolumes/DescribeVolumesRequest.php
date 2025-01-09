<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VolumeIds
 * @property list<Shapes\VolumeFilter> $Filters
 * @property int<1, 2147483647> $MaxResults
 * @property string $NextToken
 */
class DescribeVolumesRequest extends Request
{
    /**
     * @param array{
     *     VolumeIds?: list<string>,
     *     Filters?: list<Shapes\VolumeFilter>,
     *     MaxResults?: int<1, 2147483647>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
