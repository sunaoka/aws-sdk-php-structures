<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $memorySizeInKB
 * @property bool|null $mountROSysfs
 * @property list<LambdaVolumeMount>|null $volumes
 * @property list<LambdaDeviceMount>|null $devices
 */
class LambdaContainerParams extends Shape
{
    /**
     * @param array{
     *     memorySizeInKB?: int|null,
     *     mountROSysfs?: bool|null,
     *     volumes?: list<LambdaVolumeMount>|null,
     *     devices?: list<LambdaDeviceMount>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
