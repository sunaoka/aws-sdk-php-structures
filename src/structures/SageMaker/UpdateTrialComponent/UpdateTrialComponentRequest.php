<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrialComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialComponentName
 * @property string $DisplayName
 * @property Shapes\TrialComponentStatus $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property array<string, Shapes\TrialComponentParameterValue> $Parameters
 * @property list<string> $ParametersToRemove
 * @property array<string, Shapes\TrialComponentArtifact> $InputArtifacts
 * @property list<string> $InputArtifactsToRemove
 * @property array<string, Shapes\TrialComponentArtifact> $OutputArtifacts
 * @property list<string> $OutputArtifactsToRemove
 */
class UpdateTrialComponentRequest extends Request
{
    /**
     * @param array{
     *     TrialComponentName: string,
     *     DisplayName?: string,
     *     Status?: Shapes\TrialComponentStatus,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Parameters?: array<string, Shapes\TrialComponentParameterValue>,
     *     ParametersToRemove?: list<string>,
     *     InputArtifacts?: array<string, Shapes\TrialComponentArtifact>,
     *     InputArtifactsToRemove?: list<string>,
     *     OutputArtifacts?: array<string, Shapes\TrialComponentArtifact>,
     *     OutputArtifactsToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
