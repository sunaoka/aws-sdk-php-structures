<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Identifier
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Identifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
