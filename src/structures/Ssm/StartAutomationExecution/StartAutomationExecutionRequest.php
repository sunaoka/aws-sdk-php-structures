<?php

namespace Sunaoka\Aws\Structures\Ssm\StartAutomationExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DocumentName
 * @property string $DocumentVersion
 * @property array<string, list<string>> $Parameters
 * @property string $ClientToken
 * @property 'Auto'|'Interactive' $Mode
 * @property string $TargetParameterName
 * @property list<Shapes\Target> $Targets
 * @property list<array<string, list<string>>> $TargetMaps
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property list<Shapes\TargetLocation> $TargetLocations
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\AlarmConfiguration $AlarmConfiguration
 * @property string $TargetLocationsURL
 */
class StartAutomationExecutionRequest extends Request
{
    /**
     * @param array{
     *     DocumentName: string,
     *     DocumentVersion?: string,
     *     Parameters?: array<string, list<string>>,
     *     ClientToken?: string,
     *     Mode?: 'Auto'|'Interactive',
     *     TargetParameterName?: string,
     *     Targets?: list<Shapes\Target>,
     *     TargetMaps?: list<array<string, list<string>>>,
     *     MaxConcurrency?: string,
     *     MaxErrors?: string,
     *     TargetLocations?: list<Shapes\TargetLocation>,
     *     Tags?: list<Shapes\Tag>,
     *     AlarmConfiguration?: Shapes\AlarmConfiguration,
     *     TargetLocationsURL?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
