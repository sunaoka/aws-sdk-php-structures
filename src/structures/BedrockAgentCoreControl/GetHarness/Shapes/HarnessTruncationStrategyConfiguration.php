<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessSlidingWindowConfiguration|null $slidingWindow
 * @property HarnessSummarizationConfiguration|null $summarization
 */
class HarnessTruncationStrategyConfiguration extends Shape
{
    /**
     * @param array{
     *     slidingWindow?: HarnessSlidingWindowConfiguration|null,
     *     summarization?: HarnessSummarizationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
