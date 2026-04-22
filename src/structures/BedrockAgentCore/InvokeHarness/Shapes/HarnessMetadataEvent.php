<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessTokenUsage $usage
 * @property HarnessStreamMetrics $metrics
 */
class HarnessMetadataEvent extends Shape
{
    /**
     * @param array{
     *     usage: HarnessTokenUsage,
     *     metrics: HarnessStreamMetrics
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
