<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userId
 */
class UserContext extends Shape
{
    /**
     * @param array{userId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
