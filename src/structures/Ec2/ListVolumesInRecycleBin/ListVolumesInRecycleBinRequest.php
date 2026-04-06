<?php

namespace Sunaoka\Aws\Structures\Ec2\ListVolumesInRecycleBin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $VolumeIds
 * @property bool|null $DryRun
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListVolumesInRecycleBinRequest extends Request
{
    /**
     * @param array{
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
