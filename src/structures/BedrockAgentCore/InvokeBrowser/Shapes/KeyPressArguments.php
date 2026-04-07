<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property int<1, 100>|null $presses
 */
class KeyPressArguments extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     presses?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
