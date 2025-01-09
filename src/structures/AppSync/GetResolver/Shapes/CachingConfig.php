<?php

namespace Sunaoka\Aws\Structures\AppSync\GetResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ttl
 * @property list<string> $cachingKeys
 */
class CachingConfig extends Shape
{
    /**
     * @param array{
     *     ttl: int,
     *     cachingKeys?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
