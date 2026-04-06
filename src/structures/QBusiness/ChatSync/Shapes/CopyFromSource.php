<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConversationSource|null $conversation
 */
class CopyFromSource extends Shape
{
    /**
     * @param array{conversation?: ConversationSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
