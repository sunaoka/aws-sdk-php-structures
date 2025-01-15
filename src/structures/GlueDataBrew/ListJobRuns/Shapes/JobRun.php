<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Attempt
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property string|null $DatasetName
 * @property string|null $ErrorMessage
 * @property int|null $ExecutionTime
 * @property string|null $JobName
 * @property string|null $RunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null $State
 * @property 'ENABLE'|'DISABLE'|null $LogSubscription
 * @property string|null $LogGroupName
 * @property list<Output>|null $Outputs
 * @property list<DataCatalogOutput>|null $DataCatalogOutputs
 * @property list<DatabaseOutput>|null $DatabaseOutputs
 * @property RecipeReference|null $RecipeReference
 * @property string|null $StartedBy
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property JobSample|null $JobSample
 * @property list<ValidationConfiguration>|null $ValidationConfigurations
 */
class JobRun extends Shape
{
    /**
     * @param array{
     *     Attempt?: int|null,
     *     CompletedOn?: \Aws\Api\DateTimeResult|null,
     *     DatasetName?: string|null,
     *     ErrorMessage?: string|null,
     *     ExecutionTime?: int|null,
     *     JobName?: string|null,
     *     RunId?: string|null,
     *     State?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null,
     *     LogSubscription?: 'ENABLE'|'DISABLE'|null,
     *     LogGroupName?: string|null,
     *     Outputs?: list<Output>|null,
     *     DataCatalogOutputs?: list<DataCatalogOutput>|null,
     *     DatabaseOutputs?: list<DatabaseOutput>|null,
     *     RecipeReference?: RecipeReference|null,
     *     StartedBy?: string|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null,
     *     JobSample?: JobSample|null,
     *     ValidationConfigurations?: list<ValidationConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
