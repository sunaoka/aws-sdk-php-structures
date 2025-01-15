<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ttl
 * @property list<string>|null $cachingKeys
 */
class CachingConfig extends Shape
{
    /**
     * @param array{
     *     ttl: int,
     *     cachingKeys?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
