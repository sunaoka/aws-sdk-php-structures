<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrialComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialComponentName
 * @property string $DisplayName
 * @property Shapes\TrialComponentStatus $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property array<string, Shapes\TrialComponentParameterValue> $Parameters
 * @property array<string, Shapes\TrialComponentArtifact> $InputArtifacts
 * @property array<string, Shapes\TrialComponentArtifact> $OutputArtifacts
 * @property Shapes\MetadataProperties $MetadataProperties
 * @property list<Shapes\Tag> $Tags
 */
class CreateTrialComponentRequest extends Request
{
    /**
     * @param array{
     *     TrialComponentName: string,
     *     DisplayName?: string,
     *     Status?: Shapes\TrialComponentStatus,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Parameters?: array<string, Shapes\TrialComponentParameterValue>,
     *     InputArtifacts?: array<string, Shapes\TrialComponentArtifact>,
     *     OutputArtifacts?: array<string, Shapes\TrialComponentArtifact>,
     *     MetadataProperties?: Shapes\MetadataProperties,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
