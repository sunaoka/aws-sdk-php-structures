<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstanceNodeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'ERROR'|'NOT_AVAILABLE'|'PAUSED' $CurrentStatus
 * @property string $NodeId
 * @property string $NodeInstanceId
 * @property string $NodeName
 * @property string $PackageName
 * @property string $PackagePatchVersion
 * @property string $PackageVersion
 */
class NodeInstance extends Shape
{
    /**
     * @param array{
     *     CurrentStatus: 'RUNNING'|'ERROR'|'NOT_AVAILABLE'|'PAUSED',
     *     NodeId?: string,
     *     NodeInstanceId: string,
     *     NodeName?: string,
     *     PackageName?: string,
     *     PackagePatchVersion?: string,
     *     PackageVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
