<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $keys
 */
class KeyShortcutArguments extends Shape
{
    /**
     * @param array{keys: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
