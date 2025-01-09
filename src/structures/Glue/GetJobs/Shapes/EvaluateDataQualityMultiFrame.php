<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property array<string, string> $AdditionalDataSources
 * @property string $Ruleset
 * @property DQResultsPublishingOptions $PublishingOptions
 * @property array<'performanceTuning.caching'|'observations.scope', string> $AdditionalOptions
 * @property DQStopJobOnFailureOptions $StopJobOnFailureOptions
 */
class EvaluateDataQualityMultiFrame extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     AdditionalDataSources?: array<string, string>,
     *     Ruleset: string,
     *     PublishingOptions?: DQResultsPublishingOptions,
     *     AdditionalOptions?: array<'performanceTuning.caching'|'observations.scope', string>,
     *     StopJobOnFailureOptions?: DQStopJobOnFailureOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
