<?php

namespace Sunaoka\Aws\Structures\Connect\GetTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TaskTemplateFieldIdentifier|null $Id
 */
class ReadOnlyFieldInfo extends Shape
{
    /**
     * @param array{Id?: TaskTemplateFieldIdentifier|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
