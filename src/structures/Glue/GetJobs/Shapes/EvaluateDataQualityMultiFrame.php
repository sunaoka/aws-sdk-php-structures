<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property array<string, string>|null $AdditionalDataSources
 * @property string $Ruleset
 * @property DQResultsPublishingOptions|null $PublishingOptions
 * @property array<'performanceTuning.caching'|'observations.scope'|'compositeRuleEvaluation.method', string>|null $AdditionalOptions
 * @property DQStopJobOnFailureOptions|null $StopJobOnFailureOptions
 */
class EvaluateDataQualityMultiFrame extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     AdditionalDataSources?: array<string, string>|null,
     *     Ruleset: string,
     *     PublishingOptions?: DQResultsPublishingOptions|null,
     *     AdditionalOptions?: array<'performanceTuning.caching'|'observations.scope'|'compositeRuleEvaluation.method', string>|null,
     *     StopJobOnFailureOptions?: DQStopJobOnFailureOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
