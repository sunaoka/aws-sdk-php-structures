<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumesModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $VolumeIds
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeVolumesModificationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     VolumeIds?: list<string>,
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
