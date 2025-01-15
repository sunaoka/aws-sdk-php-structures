<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstanceNodeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'ERROR'|'NOT_AVAILABLE'|'PAUSED' $CurrentStatus
 * @property string|null $NodeId
 * @property string $NodeInstanceId
 * @property string|null $NodeName
 * @property string|null $PackageName
 * @property string|null $PackagePatchVersion
 * @property string|null $PackageVersion
 */
class NodeInstance extends Shape
{
    /**
     * @param array{
     *     CurrentStatus: 'RUNNING'|'ERROR'|'NOT_AVAILABLE'|'PAUSED',
     *     NodeId?: string|null,
     *     NodeInstanceId: string,
     *     NodeName?: string|null,
     *     PackageName?: string|null,
     *     PackagePatchVersion?: string|null,
     *     PackageVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
