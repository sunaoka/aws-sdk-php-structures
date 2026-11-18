<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'expected_response'|'expected_trajectory'> $fields
 * @property list<EvaluatorFilter>|null $qualityFilters
 */
class GroundTruthConfig extends Shape
{
    /**
     * @param array{
     *     fields: list<'expected_response'|'expected_trajectory'>,
     *     qualityFilters?: list<EvaluatorFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
