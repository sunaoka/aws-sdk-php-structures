<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $memorySizeInKB
 * @property bool $mountROSysfs
 * @property list<LambdaVolumeMount> $volumes
 * @property list<LambdaDeviceMount> $devices
 */
class LambdaContainerParams extends Shape
{
    /**
     * @param array{
     *     memorySizeInKB?: int,
     *     mountROSysfs?: bool,
     *     volumes?: list<LambdaVolumeMount>,
     *     devices?: list<LambdaDeviceMount>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
