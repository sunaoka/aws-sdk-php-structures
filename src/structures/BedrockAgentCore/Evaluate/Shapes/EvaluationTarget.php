<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\Evaluate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $spanIds
 * @property list<string>|null $traceIds
 */
class EvaluationTarget extends Shape
{
    /**
     * @param array{
     *     spanIds?: list<string>|null,
     *     traceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
