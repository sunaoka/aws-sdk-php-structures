<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property '5m'|'1h' $ttl
 * @property int<0, max> $inputTokens
 */
class CacheDetail extends Shape
{
    /**
     * @param array{
     *     ttl: '5m'|'1h',
     *     inputTokens: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
