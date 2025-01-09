<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConversationSource $conversation
 */
class CopyFromSource extends Shape
{
    /**
     * @param array{conversation?: ConversationSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
