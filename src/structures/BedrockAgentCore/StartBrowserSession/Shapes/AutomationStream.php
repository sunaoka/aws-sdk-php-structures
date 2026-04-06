<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streamEndpoint
 * @property 'ENABLED'|'DISABLED' $streamStatus
 */
class AutomationStream extends Shape
{
    /**
     * @param array{
     *     streamEndpoint: string,
     *     streamStatus: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
