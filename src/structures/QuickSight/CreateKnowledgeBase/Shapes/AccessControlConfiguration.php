<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isACLEnabled
 */
class AccessControlConfiguration extends Shape
{
    /**
     * @param array{isACLEnabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
