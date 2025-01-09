<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property array<string, list<string>> $Substitutions
 */
class DefaultMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string,
     *     Substitutions?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
