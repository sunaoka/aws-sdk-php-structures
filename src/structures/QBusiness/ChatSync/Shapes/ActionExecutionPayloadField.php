<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionPayloadFieldValue $value
 */
class ActionExecutionPayloadField extends Shape
{
    /**
     * @param array{value: ActionPayloadFieldValue} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
