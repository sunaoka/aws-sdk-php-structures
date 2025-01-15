<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerRuntime
 * @property string|null $Name
 * @property string|null $ImageId
 * @property string|null $ImageName
 * @property string|null $LaunchedAt
 * @property list<VolumeMount>|null $VolumeMounts
 * @property bool|null $Privileged
 */
class ContainerDetails extends Shape
{
    /**
     * @param array{
     *     ContainerRuntime?: string|null,
     *     Name?: string|null,
     *     ImageId?: string|null,
     *     ImageName?: string|null,
     *     LaunchedAt?: string|null,
     *     VolumeMounts?: list<VolumeMount>|null,
     *     Privileged?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
