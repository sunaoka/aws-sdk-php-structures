<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrialComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialComponentName
 * @property string|null $DisplayName
 * @property Shapes\TrialComponentStatus|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property array<string, Shapes\TrialComponentParameterValue>|null $Parameters
 * @property array<string, Shapes\TrialComponentArtifact>|null $InputArtifacts
 * @property array<string, Shapes\TrialComponentArtifact>|null $OutputArtifacts
 * @property Shapes\MetadataProperties|null $MetadataProperties
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateTrialComponentRequest extends Request
{
    /**
     * @param array{
     *     TrialComponentName: string,
     *     DisplayName?: string|null,
     *     Status?: Shapes\TrialComponentStatus|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Parameters?: array<string, Shapes\TrialComponentParameterValue>|null,
     *     InputArtifacts?: array<string, Shapes\TrialComponentArtifact>|null,
     *     OutputArtifacts?: array<string, Shapes\TrialComponentArtifact>|null,
     *     MetadataProperties?: Shapes\MetadataProperties|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
