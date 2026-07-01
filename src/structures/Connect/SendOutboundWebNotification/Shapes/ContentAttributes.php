<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundWebNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecommenderConfig|null $RecommenderConfig
 */
class ContentAttributes extends Shape
{
    /**
     * @param array{RecommenderConfig?: RecommenderConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
