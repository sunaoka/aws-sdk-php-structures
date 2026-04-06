<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceLocation $location
 */
class BrowserExtension extends Shape
{
    /**
     * @param array{location: ResourceLocation} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
