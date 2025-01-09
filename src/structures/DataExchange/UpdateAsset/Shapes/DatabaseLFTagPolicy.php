<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LFTag> $Expression
 */
class DatabaseLFTagPolicy extends Shape
{
    /**
     * @param array{Expression: list<LFTag>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
