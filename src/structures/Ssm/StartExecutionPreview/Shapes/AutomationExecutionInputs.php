<?php

namespace Sunaoka\Aws\Structures\Ssm\StartExecutionPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>>|null $Parameters
 * @property string|null $TargetParameterName
 * @property list<Target>|null $Targets
 * @property list<array<string, list<string>>>|null $TargetMaps
 * @property list<TargetLocation>|null $TargetLocations
 * @property string|null $TargetLocationsURL
 */
class AutomationExecutionInputs extends Shape
{
    /**
     * @param array{
     *     Parameters?: array<string, list<string>>|null,
     *     TargetParameterName?: string|null,
     *     Targets?: list<Target>|null,
     *     TargetMaps?: list<array<string, list<string>>>|null,
     *     TargetLocations?: list<TargetLocation>|null,
     *     TargetLocationsURL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
