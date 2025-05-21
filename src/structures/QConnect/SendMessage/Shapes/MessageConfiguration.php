<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $generateFillerMessage
 */
class MessageConfiguration extends Shape
{
    /**
     * @param array{generateFillerMessage?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
