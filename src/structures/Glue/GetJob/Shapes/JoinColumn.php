<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $From
 * @property list<list<string>> $Keys
 */
class JoinColumn extends Shape
{
    /**
     * @param array{
     *     From: string,
     *     Keys: list<list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
