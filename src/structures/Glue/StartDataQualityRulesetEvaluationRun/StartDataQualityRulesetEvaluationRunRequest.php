<?php

namespace Sunaoka\Aws\Structures\Glue\StartDataQualityRulesetEvaluationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataSource $DataSource
 * @property string $Role
 * @property int $NumberOfWorkers
 * @property int $Timeout
 * @property string $ClientToken
 * @property Shapes\DataQualityEvaluationRunAdditionalRunOptions $AdditionalRunOptions
 * @property list<string> $RulesetNames
 * @property array<string, Shapes\DataSource> $AdditionalDataSources
 */
class StartDataQualityRulesetEvaluationRunRequest extends Request
{
    /**
     * @param array{
     *     DataSource: Shapes\DataSource,
     *     Role: string,
     *     NumberOfWorkers?: int,
     *     Timeout?: int,
     *     ClientToken?: string,
     *     AdditionalRunOptions?: Shapes\DataQualityEvaluationRunAdditionalRunOptions,
     *     RulesetNames: list<string>,
     *     AdditionalDataSources?: array<string, Shapes\DataSource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
