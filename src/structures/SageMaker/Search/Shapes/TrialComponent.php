<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrialComponentName
 * @property string|null $DisplayName
 * @property string|null $TrialComponentArn
 * @property TrialComponentSource|null $Source
 * @property TrialComponentStatus|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property UserContext|null $LastModifiedBy
 * @property array<string, TrialComponentParameterValue>|null $Parameters
 * @property array<string, TrialComponentArtifact>|null $InputArtifacts
 * @property array<string, TrialComponentArtifact>|null $OutputArtifacts
 * @property list<TrialComponentMetricSummary>|null $Metrics
 * @property MetadataProperties|null $MetadataProperties
 * @property TrialComponentSourceDetail|null $SourceDetail
 * @property string|null $LineageGroupArn
 * @property list<Tag>|null $Tags
 * @property list<ParentShape>|null $Parents
 * @property string|null $RunName
 */
class TrialComponent extends Shape
{
    /**
     * @param array{
     *     TrialComponentName?: string|null,
     *     DisplayName?: string|null,
     *     TrialComponentArn?: string|null,
     *     Source?: TrialComponentSource|null,
     *     Status?: TrialComponentStatus|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: UserContext|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: UserContext|null,
     *     Parameters?: array<string, TrialComponentParameterValue>|null,
     *     InputArtifacts?: array<string, TrialComponentArtifact>|null,
     *     OutputArtifacts?: array<string, TrialComponentArtifact>|null,
     *     Metrics?: list<TrialComponentMetricSummary>|null,
     *     MetadataProperties?: MetadataProperties|null,
     *     SourceDetail?: TrialComponentSourceDetail|null,
     *     LineageGroupArn?: string|null,
     *     Tags?: list<Tag>|null,
     *     Parents?: list<ParentShape>|null,
     *     RunName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
