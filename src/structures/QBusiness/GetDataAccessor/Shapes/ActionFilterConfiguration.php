<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataAccessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeFilter $documentAttributeFilter
 */
class ActionFilterConfiguration extends Shape
{
    /**
     * @param array{documentAttributeFilter: AttributeFilter} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
