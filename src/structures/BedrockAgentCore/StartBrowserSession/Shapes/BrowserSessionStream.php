<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomationStream $automationStream
 * @property LiveViewStream|null $liveViewStream
 */
class BrowserSessionStream extends Shape
{
    /**
     * @param array{
     *     automationStream: AutomationStream,
     *     liveViewStream?: LiveViewStream|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
