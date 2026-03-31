<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Tag>|null $Tags
 */
class AssetConfiguration extends Shape
{
    /**
     * @param array{Tags?: list<Tag>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
