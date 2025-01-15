<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $VolumeIds
 * @property list<Shapes\VolumeFilter>|null $Filters
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeVolumesRequest extends Request
{
    /**
     * @param array{
     *     VolumeIds?: list<string>|null,
     *     Filters?: list<Shapes\VolumeFilter>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
