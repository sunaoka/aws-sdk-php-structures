<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $profileIdentifier
 */
class BrowserProfileConfiguration extends Shape
{
    /**
     * @param array{profileIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
