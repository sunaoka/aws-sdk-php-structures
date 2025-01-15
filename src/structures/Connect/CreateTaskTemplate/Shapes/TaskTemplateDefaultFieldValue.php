<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TaskTemplateFieldIdentifier|null $Id
 * @property string|null $DefaultValue
 */
class TaskTemplateDefaultFieldValue extends Shape
{
    /**
     * @param array{
     *     Id?: TaskTemplateFieldIdentifier|null,
     *     DefaultValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
