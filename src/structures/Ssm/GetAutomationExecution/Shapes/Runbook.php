<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAutomationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentName
 * @property string|null $DocumentVersion
 * @property array<string, list<string>>|null $Parameters
 * @property string|null $TargetParameterName
 * @property list<Target>|null $Targets
 * @property list<array<string, list<string>>>|null $TargetMaps
 * @property string|null $MaxConcurrency
 * @property string|null $MaxErrors
 * @property list<TargetLocation>|null $TargetLocations
 */
class Runbook extends Shape
{
    /**
     * @param array{
     *     DocumentName: string,
     *     DocumentVersion?: string|null,
     *     Parameters?: array<string, list<string>>|null,
     *     TargetParameterName?: string|null,
     *     Targets?: list<Target>|null,
     *     TargetMaps?: list<array<string, list<string>>>|null,
     *     MaxConcurrency?: string|null,
     *     MaxErrors?: string|null,
     *     TargetLocations?: list<TargetLocation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
