<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $payload
 * @property S3Identifier|null $s3
 */
class APISchema extends Shape
{
    /**
     * @param array{
     *     payload?: string|null,
     *     s3?: S3Identifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
