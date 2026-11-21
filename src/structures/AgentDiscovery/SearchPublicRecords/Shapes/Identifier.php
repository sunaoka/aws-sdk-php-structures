<?php

namespace Sunaoka\Aws\Structures\AgentDiscovery\SearchPublicRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domain
 * @property string|null $uri
 */
class Identifier extends Shape
{
    /**
     * @param array{
     *     domain?: string|null,
     *     uri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
