<?php

namespace Sunaoka\Aws\Structures\mgn\ListTemplateActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $actionIDs
 */
class TemplateActionsRequestFilters extends Shape
{
    /**
     * @param array{actionIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
