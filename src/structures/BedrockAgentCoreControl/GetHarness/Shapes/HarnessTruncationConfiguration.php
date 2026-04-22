<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'sliding_window'|'summarization'|'none' $strategy
 * @property HarnessTruncationStrategyConfiguration|null $config
 */
class HarnessTruncationConfiguration extends Shape
{
    /**
     * @param array{
     *     strategy: 'sliding_window'|'summarization'|'none',
     *     config?: HarnessTruncationStrategyConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
