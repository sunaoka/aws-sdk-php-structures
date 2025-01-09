<?php

namespace Sunaoka\Aws\Structures\QApps\PredictQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $body
 * @property 'USER'|'SYSTEM' $type
 */
class ConversationMessage extends Shape
{
    /**
     * @param array{
     *     body: string,
     *     type: 'USER'|'SYSTEM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
