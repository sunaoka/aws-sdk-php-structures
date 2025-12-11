<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 */
class BrowserSigningConfigInput extends Shape
{
    /**
     * @param array{enabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
