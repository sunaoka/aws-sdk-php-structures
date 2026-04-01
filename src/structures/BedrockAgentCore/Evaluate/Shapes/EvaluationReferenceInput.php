<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\Evaluate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Context $context
 * @property EvaluationContent|null $expectedResponse
 * @property list<EvaluationContent>|null $assertions
 * @property EvaluationExpectedTrajectory|null $expectedTrajectory
 */
class EvaluationReferenceInput extends Shape
{
    /**
     * @param array{
     *     context: Context,
     *     expectedResponse?: EvaluationContent|null,
     *     assertions?: list<EvaluationContent>|null,
     *     expectedTrajectory?: EvaluationExpectedTrajectory|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
