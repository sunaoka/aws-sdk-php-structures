<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJobRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $Attempt
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property string $DatasetName
 * @property string $ErrorMessage
 * @property int $ExecutionTime
 * @property string $JobName
 * @property Shapes\ProfileConfiguration $ProfileConfiguration
 * @property list<Shapes\ValidationConfiguration> $ValidationConfigurations
 * @property string $RunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT' $State
 * @property 'ENABLE'|'DISABLE' $LogSubscription
 * @property string $LogGroupName
 * @property list<Shapes\Output> $Outputs
 * @property list<Shapes\DataCatalogOutput> $DataCatalogOutputs
 * @property list<Shapes\DatabaseOutput> $DatabaseOutputs
 * @property Shapes\RecipeReference $RecipeReference
 * @property string $StartedBy
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property Shapes\JobSample $JobSample
 */
class DescribeJobRunResponse extends Response
{
}
