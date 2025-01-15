<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerRuntime
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Image
 * @property string|null $ImagePrefix
 * @property list<VolumeMount>|null $VolumeMounts
 * @property SecurityContext|null $SecurityContext
 */
class Container extends Shape
{
    /**
     * @param array{
     *     ContainerRuntime?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Image?: string|null,
     *     ImagePrefix?: string|null,
     *     VolumeMounts?: list<VolumeMount>|null,
     *     SecurityContext?: SecurityContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
