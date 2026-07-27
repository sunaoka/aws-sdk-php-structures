<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RunId
 * @property DataSource|null $DataSource
 * @property string|null $Role
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property DataQualityEvaluationRunAdditionalRunOptions|null $AdditionalRunOptions
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null $Status
 * @property string|null $ErrorString
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property int|null $ExecutionTime
 * @property list<string>|null $RulesetNames
 * @property list<string>|null $ResultIds
 * @property array<string, DataSource>|null $AdditionalDataSources
 */
class DataQualityRulesetEvaluationRun extends Shape
{
    /**
     * @param array{
     *     RunId?: string|null,
     *     DataSource?: DataSource|null,
     *     Role?: string|null,
     *     NumberOfWorkers?: int|null,
     *     Timeout?: int<1, max>|null,
     *     AdditionalRunOptions?: DataQualityEvaluationRunAdditionalRunOptions|null,
     *     Status?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null,
     *     ErrorString?: string|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult|null,
     *     CompletedOn?: \Aws\Api\DateTimeResult|null,
     *     ExecutionTime?: int|null,
     *     RulesetNames?: list<string>|null,
     *     ResultIds?: list<string>|null,
     *     AdditionalDataSources?: array<string, DataSource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
