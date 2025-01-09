<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VolumeIds
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeVolumesRequest extends Request
{
    /**
     * @param array{
     *     VolumeIds?: list<string>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
