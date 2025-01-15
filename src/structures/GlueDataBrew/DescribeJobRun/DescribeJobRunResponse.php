<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJobRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $Attempt
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property string|null $DatasetName
 * @property string|null $ErrorMessage
 * @property int|null $ExecutionTime
 * @property string $JobName
 * @property Shapes\ProfileConfiguration|null $ProfileConfiguration
 * @property list<Shapes\ValidationConfiguration>|null $ValidationConfigurations
 * @property string|null $RunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null $State
 * @property 'ENABLE'|'DISABLE'|null $LogSubscription
 * @property string|null $LogGroupName
 * @property list<Shapes\Output>|null $Outputs
 * @property list<Shapes\DataCatalogOutput>|null $DataCatalogOutputs
 * @property list<Shapes\DatabaseOutput>|null $DatabaseOutputs
 * @property Shapes\RecipeReference|null $RecipeReference
 * @property string|null $StartedBy
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property Shapes\JobSample|null $JobSample
 */
class DescribeJobRunResponse extends Response
{
}
