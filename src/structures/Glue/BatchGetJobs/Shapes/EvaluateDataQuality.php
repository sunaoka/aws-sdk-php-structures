<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $Ruleset
 * @property 'PrimaryInput'|'EvaluationResults'|null $Output
 * @property DQResultsPublishingOptions|null $PublishingOptions
 * @property DQStopJobOnFailureOptions|null $StopJobOnFailureOptions
 */
class EvaluateDataQuality extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     Ruleset: string,
     *     Output?: 'PrimaryInput'|'EvaluationResults'|null,
     *     PublishingOptions?: DQResultsPublishingOptions|null,
     *     StopJobOnFailureOptions?: DQStopJobOnFailureOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
