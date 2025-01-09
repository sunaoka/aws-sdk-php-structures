<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateBot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $LexRegion
 */
class LexBot extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     LexRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
