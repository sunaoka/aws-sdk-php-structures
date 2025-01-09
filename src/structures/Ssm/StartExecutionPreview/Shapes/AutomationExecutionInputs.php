<?php

namespace Sunaoka\Aws\Structures\Ssm\StartExecutionPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>> $Parameters
 * @property string $TargetParameterName
 * @property list<Target> $Targets
 * @property list<array<string, list<string>>> $TargetMaps
 * @property list<TargetLocation> $TargetLocations
 * @property string $TargetLocationsURL
 */
class AutomationExecutionInputs extends Shape
{
    /**
     * @param array{
     *     Parameters?: array<string, list<string>>,
     *     TargetParameterName?: string,
     *     Targets?: list<Target>,
     *     TargetMaps?: list<array<string, list<string>>>,
     *     TargetLocations?: list<TargetLocation>,
     *     TargetLocationsURL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
