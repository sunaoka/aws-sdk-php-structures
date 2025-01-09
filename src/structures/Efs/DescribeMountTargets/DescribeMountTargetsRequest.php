<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeMountTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $MaxItems
 * @property string $Marker
 * @property string $FileSystemId
 * @property string $MountTargetId
 * @property string $AccessPointId
 */
class DescribeMountTargetsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: int<1, max>,
     *     Marker?: string,
     *     FileSystemId?: string,
     *     MountTargetId?: string,
     *     AccessPointId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
