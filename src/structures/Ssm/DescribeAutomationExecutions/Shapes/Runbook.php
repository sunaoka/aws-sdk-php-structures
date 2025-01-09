<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentName
 * @property string $DocumentVersion
 * @property array<string, list<string>> $Parameters
 * @property string $TargetParameterName
 * @property list<Target> $Targets
 * @property list<array<string, list<string>>> $TargetMaps
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property list<TargetLocation> $TargetLocations
 */
class Runbook extends Shape
{
    /**
     * @param array{
     *     DocumentName: string,
     *     DocumentVersion?: string,
     *     Parameters?: array<string, list<string>>,
     *     TargetParameterName?: string,
     *     Targets?: list<Target>,
     *     TargetMaps?: list<array<string, list<string>>>,
     *     MaxConcurrency?: string,
     *     MaxErrors?: string,
     *     TargetLocations?: list<TargetLocation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
