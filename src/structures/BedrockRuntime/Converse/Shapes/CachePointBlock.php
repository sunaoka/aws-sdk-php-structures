<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'default' $type
 * @property '5m'|'1h'|null $ttl
 */
class CachePointBlock extends Shape
{
    /**
     * @param array{
     *     type: 'default',
     *     ttl?: '5m'|'1h'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
