<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrialComponent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TrialComponentName
 * @property string|null $TrialComponentArn
 * @property string|null $DisplayName
 * @property Shapes\TrialComponentSource|null $Source
 * @property Shapes\TrialComponentStatus|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 * @property array<string, Shapes\TrialComponentParameterValue>|null $Parameters
 * @property array<string, Shapes\TrialComponentArtifact>|null $InputArtifacts
 * @property array<string, Shapes\TrialComponentArtifact>|null $OutputArtifacts
 * @property Shapes\MetadataProperties|null $MetadataProperties
 * @property list<Shapes\TrialComponentMetricSummary>|null $Metrics
 * @property string|null $LineageGroupArn
 * @property list<Shapes\TrialComponentSource>|null $Sources
 */
class DescribeTrialComponentResponse extends Response
{
}
