<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerRuntime
 * @property string $Name
 * @property string $ImageId
 * @property string $ImageName
 * @property string $LaunchedAt
 * @property list<VolumeMount> $VolumeMounts
 * @property bool $Privileged
 */
class ContainerDetails extends Shape
{
    /**
     * @param array{
     *     ContainerRuntime?: string,
     *     Name?: string,
     *     ImageId?: string,
     *     ImageName?: string,
     *     LaunchedAt?: string,
     *     VolumeMounts?: list<VolumeMount>,
     *     Privileged?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
