<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDataQualityEvaluationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CATALOG'|'DATABASE'|'TABLE' $Level
 * @property Shapes\DataQualityEvaluationConfigDataSource $DataSource
 * @property string|null $RulesetName
 * @property 'SIMPLE'|'ADVANCED'|null $ManagedRulesetName
 * @property list<'ONCE'|'SCHEDULE'|'METADATA_CHANGE'>|null $Triggers
 * @property string|null $ScheduleExpression
 * @property \Aws\Api\DateTimeResult|null $StartAt
 * @property \Aws\Api\DateTimeResult|null $EndAt
 * @property string $Role
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property Shapes\DataQualityEvaluationConfigAdditionalRunOptions|null $AdditionalRunOptions
 * @property array<string, Shapes\DataSource>|null $AdditionalDataSources
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateDataQualityEvaluationConfigRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Level: 'CATALOG'|'DATABASE'|'TABLE',
     *     DataSource: Shapes\DataQualityEvaluationConfigDataSource,
     *     RulesetName?: string|null,
     *     ManagedRulesetName?: 'SIMPLE'|'ADVANCED'|null,
     *     Triggers?: list<'ONCE'|'SCHEDULE'|'METADATA_CHANGE'>|null,
     *     ScheduleExpression?: string|null,
     *     StartAt?: \Aws\Api\DateTimeResult|null,
     *     EndAt?: \Aws\Api\DateTimeResult|null,
     *     Role: string,
     *     NumberOfWorkers?: int|null,
     *     Timeout?: int<1, max>|null,
     *     AdditionalRunOptions?: Shapes\DataQualityEvaluationConfigAdditionalRunOptions|null,
     *     AdditionalDataSources?: array<string, Shapes\DataSource>|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
