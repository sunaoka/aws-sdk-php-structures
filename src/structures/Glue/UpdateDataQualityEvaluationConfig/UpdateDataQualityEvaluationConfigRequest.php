<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDataQualityEvaluationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\DataQualityEvaluationConfigDataSource|null $DataSource
 * @property string|null $RulesetName
 * @property 'SIMPLE'|'ADVANCED'|null $ManagedRulesetName
 * @property list<'ONCE'|'SCHEDULE'|'METADATA_CHANGE'>|null $Triggers
 * @property string|null $ScheduleExpression
 * @property \Aws\Api\DateTimeResult|null $StartAt
 * @property \Aws\Api\DateTimeResult|null $EndAt
 * @property bool|null $PauseRuns
 * @property string|null $Role
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property Shapes\DataQualityEvaluationConfigAdditionalRunOptions|null $AdditionalRunOptions
 * @property array<string, Shapes\DataSource>|null $AdditionalDataSources
 */
class UpdateDataQualityEvaluationConfigRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DataSource?: Shapes\DataQualityEvaluationConfigDataSource|null,
     *     RulesetName?: string|null,
     *     ManagedRulesetName?: 'SIMPLE'|'ADVANCED'|null,
     *     Triggers?: list<'ONCE'|'SCHEDULE'|'METADATA_CHANGE'>|null,
     *     ScheduleExpression?: string|null,
     *     StartAt?: \Aws\Api\DateTimeResult|null,
     *     EndAt?: \Aws\Api\DateTimeResult|null,
     *     PauseRuns?: bool|null,
     *     Role?: string|null,
     *     NumberOfWorkers?: int|null,
     *     Timeout?: int<1, max>|null,
     *     AdditionalRunOptions?: Shapes\DataQualityEvaluationConfigAdditionalRunOptions|null,
     *     AdditionalDataSources?: array<string, Shapes\DataSource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
