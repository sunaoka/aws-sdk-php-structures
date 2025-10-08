<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreateEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $rootEventId
 * @property string $name
 */
class Branch extends Shape
{
    /**
     * @param array{
     *     rootEventId?: string|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
