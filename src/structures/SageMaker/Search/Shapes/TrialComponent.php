<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrialComponentName
 * @property string $DisplayName
 * @property string $TrialComponentArn
 * @property TrialComponentSource $Source
 * @property TrialComponentStatus $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property UserContext $LastModifiedBy
 * @property array<string, TrialComponentParameterValue> $Parameters
 * @property array<string, TrialComponentArtifact> $InputArtifacts
 * @property array<string, TrialComponentArtifact> $OutputArtifacts
 * @property list<TrialComponentMetricSummary> $Metrics
 * @property MetadataProperties $MetadataProperties
 * @property TrialComponentSourceDetail $SourceDetail
 * @property string $LineageGroupArn
 * @property list<Tag> $Tags
 * @property list<ParentShape> $Parents
 * @property string $RunName
 */
class TrialComponent extends Shape
{
    /**
     * @param array{
     *     TrialComponentName?: string,
     *     DisplayName?: string,
     *     TrialComponentArn?: string,
     *     Source?: TrialComponentSource,
     *     Status?: TrialComponentStatus,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: UserContext,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: UserContext,
     *     Parameters?: array<string, TrialComponentParameterValue>,
     *     InputArtifacts?: array<string, TrialComponentArtifact>,
     *     OutputArtifacts?: array<string, TrialComponentArtifact>,
     *     Metrics?: list<TrialComponentMetricSummary>,
     *     MetadataProperties?: MetadataProperties,
     *     SourceDetail?: TrialComponentSourceDetail,
     *     LineageGroupArn?: string,
     *     Tags?: list<Tag>,
     *     Parents?: list<ParentShape>,
     *     RunName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
