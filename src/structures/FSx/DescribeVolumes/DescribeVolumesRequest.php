<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VolumeIds
 * @property list<Shapes\VolumeFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeVolumesRequest extends Request
{
    /**
     * @param array{
     *     VolumeIds?: list<string>,
     *     Filters?: list<Shapes\VolumeFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
