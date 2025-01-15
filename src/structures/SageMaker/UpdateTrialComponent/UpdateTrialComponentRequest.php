<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrialComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialComponentName
 * @property string|null $DisplayName
 * @property Shapes\TrialComponentStatus|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property array<string, Shapes\TrialComponentParameterValue>|null $Parameters
 * @property list<string>|null $ParametersToRemove
 * @property array<string, Shapes\TrialComponentArtifact>|null $InputArtifacts
 * @property list<string>|null $InputArtifactsToRemove
 * @property array<string, Shapes\TrialComponentArtifact>|null $OutputArtifacts
 * @property list<string>|null $OutputArtifactsToRemove
 */
class UpdateTrialComponentRequest extends Request
{
    /**
     * @param array{
     *     TrialComponentName: string,
     *     DisplayName?: string|null,
     *     Status?: Shapes\TrialComponentStatus|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Parameters?: array<string, Shapes\TrialComponentParameterValue>|null,
     *     ParametersToRemove?: list<string>|null,
     *     InputArtifacts?: array<string, Shapes\TrialComponentArtifact>|null,
     *     InputArtifactsToRemove?: list<string>|null,
     *     OutputArtifacts?: array<string, Shapes\TrialComponentArtifact>|null,
     *     OutputArtifactsToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
