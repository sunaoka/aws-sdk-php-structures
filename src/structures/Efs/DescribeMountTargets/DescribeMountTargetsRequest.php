<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeMountTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max>|null $MaxItems
 * @property string|null $Marker
 * @property string|null $FileSystemId
 * @property string|null $MountTargetId
 * @property string|null $AccessPointId
 */
class DescribeMountTargetsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: int<1, max>|null,
     *     Marker?: string|null,
     *     FileSystemId?: string|null,
     *     MountTargetId?: string|null,
     *     AccessPointId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
