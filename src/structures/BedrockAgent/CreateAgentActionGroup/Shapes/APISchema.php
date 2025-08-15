<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Identifier|null $s3
 * @property string|null $payload
 */
class APISchema extends Shape
{
    /**
     * @param array{
     *     s3?: S3Identifier|null,
     *     payload?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
