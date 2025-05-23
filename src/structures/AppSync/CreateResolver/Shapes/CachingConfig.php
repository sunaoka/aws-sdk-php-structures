<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateResolver\Shapes;

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
