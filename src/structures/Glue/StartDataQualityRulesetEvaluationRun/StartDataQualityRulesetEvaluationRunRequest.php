<?php

namespace Sunaoka\Aws\Structures\Glue\StartDataQualityRulesetEvaluationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataSource $DataSource
 * @property string $Role
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property string|null $ClientToken
 * @property Shapes\DataQualityEvaluationRunAdditionalRunOptions|null $AdditionalRunOptions
 * @property list<string> $RulesetNames
 * @property array<string, Shapes\DataSource>|null $AdditionalDataSources
 */
class StartDataQualityRulesetEvaluationRunRequest extends Request
{
    /**
     * @param array{
     *     DataSource: Shapes\DataSource,
     *     Role: string,
     *     NumberOfWorkers?: int|null,
     *     Timeout?: int<1, max>|null,
     *     ClientToken?: string|null,
     *     AdditionalRunOptions?: Shapes\DataQualityEvaluationRunAdditionalRunOptions|null,
     *     RulesetNames: list<string>,
     *     AdditionalDataSources?: array<string, Shapes\DataSource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
