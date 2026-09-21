<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessHookLambdaTarget|null $lambda
 * @property HarnessHookSnsTarget|null $sns
 * @property HarnessHookEventBridgeTarget|null $eventBridge
 */
class HarnessHookTarget extends Shape
{
    /**
     * @param array{
     *     lambda?: HarnessHookLambdaTarget|null,
     *     sns?: HarnessHookSnsTarget|null,
     *     eventBridge?: HarnessHookEventBridgeTarget|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
