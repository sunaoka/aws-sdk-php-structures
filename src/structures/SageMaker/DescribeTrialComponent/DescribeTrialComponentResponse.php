<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrialComponent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrialComponentName
 * @property string $TrialComponentArn
 * @property string $DisplayName
 * @property Shapes\TrialComponentSource $Source
 * @property Shapes\TrialComponentStatus $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 * @property array<string, Shapes\TrialComponentParameterValue> $Parameters
 * @property array<string, Shapes\TrialComponentArtifact> $InputArtifacts
 * @property array<string, Shapes\TrialComponentArtifact> $OutputArtifacts
 * @property Shapes\MetadataProperties $MetadataProperties
 * @property list<Shapes\TrialComponentMetricSummary> $Metrics
 * @property string $LineageGroupArn
 * @property list<Shapes\TrialComponentSource> $Sources
 */
class DescribeTrialComponentResponse extends Response
{
}
