<?php

namespace Sunaoka\Aws\Structures\Ssm\StartAutomationExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DocumentName
 * @property string|null $DocumentVersion
 * @property array<string, list<string>>|null $Parameters
 * @property string|null $ClientToken
 * @property 'Auto'|'Interactive'|null $Mode
 * @property string|null $TargetParameterName
 * @property list<Shapes\Target>|null $Targets
 * @property list<array<string, list<string>>>|null $TargetMaps
 * @property string|null $MaxConcurrency
 * @property string|null $MaxErrors
 * @property list<Shapes\TargetLocation>|null $TargetLocations
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\AlarmConfiguration|null $AlarmConfiguration
 * @property string|null $TargetLocationsURL
 */
class StartAutomationExecutionRequest extends Request
{
    /**
     * @param array{
     *     DocumentName: string,
     *     DocumentVersion?: string|null,
     *     Parameters?: array<string, list<string>>|null,
     *     ClientToken?: string|null,
     *     Mode?: 'Auto'|'Interactive'|null,
     *     TargetParameterName?: string|null,
     *     Targets?: list<Shapes\Target>|null,
     *     TargetMaps?: list<array<string, list<string>>>|null,
     *     MaxConcurrency?: string|null,
     *     MaxErrors?: string|null,
     *     TargetLocations?: list<Shapes\TargetLocation>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     AlarmConfiguration?: Shapes\AlarmConfiguration|null,
     *     TargetLocationsURL?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
