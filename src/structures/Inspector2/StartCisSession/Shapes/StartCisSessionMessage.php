<?php

namespace Sunaoka\Aws\Structures\Inspector2\StartCisSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionToken
 */
class StartCisSessionMessage extends Shape
{
    /**
     * @param array{sessionToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
