<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $Ruleset
 * @property 'PrimaryInput'|'EvaluationResults' $Output
 * @property DQResultsPublishingOptions $PublishingOptions
 * @property DQStopJobOnFailureOptions $StopJobOnFailureOptions
 */
class EvaluateDataQuality extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     Ruleset: string,
     *     Output?: 'PrimaryInput'|'EvaluationResults',
     *     PublishingOptions?: DQResultsPublishingOptions,
     *     StopJobOnFailureOptions?: DQStopJobOnFailureOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
