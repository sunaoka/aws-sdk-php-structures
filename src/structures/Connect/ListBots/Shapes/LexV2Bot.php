<?php

namespace Sunaoka\Aws\Structures\Connect\ListBots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AliasArn
 */
class LexV2Bot extends Shape
{
    /**
     * @param array{AliasArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
