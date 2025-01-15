<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property array<string, list<string>>|null $Substitutions
 */
class DefaultMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     Substitutions?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
