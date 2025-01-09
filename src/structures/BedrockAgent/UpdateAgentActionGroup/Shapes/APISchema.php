<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $payload
 * @property S3Identifier $s3
 */
class APISchema extends Shape
{
    /**
     * @param array{
     *     payload?: string,
     *     s3?: S3Identifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
