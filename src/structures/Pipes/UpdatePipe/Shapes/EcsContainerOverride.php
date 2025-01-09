<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Command
 * @property int $Cpu
 * @property list<EcsEnvironmentVariable> $Environment
 * @property list<EcsEnvironmentFile> $EnvironmentFiles
 * @property int $Memory
 * @property int $MemoryReservation
 * @property string $Name
 * @property list<EcsResourceRequirement> $ResourceRequirements
 */
class EcsContainerOverride extends Shape
{
    /**
     * @param array{
     *     Command?: list<string>,
     *     Cpu?: int,
     *     Environment?: list<EcsEnvironmentVariable>,
     *     EnvironmentFiles?: list<EcsEnvironmentFile>,
     *     Memory?: int,
     *     MemoryReservation?: int,
     *     Name?: string,
     *     ResourceRequirements?: list<EcsResourceRequirement>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
