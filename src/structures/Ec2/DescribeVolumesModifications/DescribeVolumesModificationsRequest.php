<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumesModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $VolumeIds
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class DescribeVolumesModificationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VolumeIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
