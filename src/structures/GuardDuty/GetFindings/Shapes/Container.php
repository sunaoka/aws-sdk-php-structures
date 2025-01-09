<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerRuntime
 * @property string $Id
 * @property string $Name
 * @property string $Image
 * @property string $ImagePrefix
 * @property list<VolumeMount> $VolumeMounts
 * @property SecurityContext $SecurityContext
 */
class Container extends Shape
{
    /**
     * @param array{
     *     ContainerRuntime?: string,
     *     Id?: string,
     *     Name?: string,
     *     Image?: string,
     *     ImagePrefix?: string,
     *     VolumeMounts?: list<VolumeMount>,
     *     SecurityContext?: SecurityContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
