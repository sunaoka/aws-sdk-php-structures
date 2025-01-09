<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Attempt
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property string $DatasetName
 * @property string $ErrorMessage
 * @property int $ExecutionTime
 * @property string $JobName
 * @property string $RunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT' $State
 * @property 'ENABLE'|'DISABLE' $LogSubscription
 * @property string $LogGroupName
 * @property list<Output> $Outputs
 * @property list<DataCatalogOutput> $DataCatalogOutputs
 * @property list<DatabaseOutput> $DatabaseOutputs
 * @property RecipeReference $RecipeReference
 * @property string $StartedBy
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property JobSample $JobSample
 * @property list<ValidationConfiguration> $ValidationConfigurations
 */
class JobRun extends Shape
{
    /**
     * @param array{
     *     Attempt?: int,
     *     CompletedOn?: \Aws\Api\DateTimeResult,
     *     DatasetName?: string,
     *     ErrorMessage?: string,
     *     ExecutionTime?: int,
     *     JobName?: string,
     *     RunId?: string,
     *     State?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT',
     *     LogSubscription?: 'ENABLE'|'DISABLE',
     *     LogGroupName?: string,
     *     Outputs?: list<Output>,
     *     DataCatalogOutputs?: list<DataCatalogOutput>,
     *     DatabaseOutputs?: list<DatabaseOutput>,
     *     RecipeReference?: RecipeReference,
     *     StartedBy?: string,
     *     StartedOn?: \Aws\Api\DateTimeResult,
     *     JobSample?: JobSample,
     *     ValidationConfigurations?: list<ValidationConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
