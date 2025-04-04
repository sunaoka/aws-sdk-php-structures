<?php

namespace Sunaoka\Aws\Structures\mgn\MarkAsArchived\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fullString
 */
class OS extends Shape
{
    /**
     * @param array{fullString?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
