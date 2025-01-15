<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Command
 * @property int|null $Cpu
 * @property list<EcsEnvironmentVariable>|null $Environment
 * @property list<EcsEnvironmentFile>|null $EnvironmentFiles
 * @property int|null $Memory
 * @property int|null $MemoryReservation
 * @property string|null $Name
 * @property list<EcsResourceRequirement>|null $ResourceRequirements
 */
class EcsContainerOverride extends Shape
{
    /**
     * @param array{
     *     Command?: list<string>|null,
     *     Cpu?: int|null,
     *     Environment?: list<EcsEnvironmentVariable>|null,
     *     EnvironmentFiles?: list<EcsEnvironmentFile>|null,
     *     Memory?: int|null,
     *     MemoryReservation?: int|null,
     *     Name?: string|null,
     *     ResourceRequirements?: list<EcsResourceRequirement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
