<?php

namespace Sunaoka\Aws\Structures\Wickr\CreateSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $lowercase
 * @property int|null $minLength
 * @property int|null $numbers
 * @property int|null $symbols
 * @property int|null $uppercase
 */
class PasswordRequirements extends Shape
{
    /**
     * @param array{
     *     lowercase?: int|null,
     *     minLength?: int|null,
     *     numbers?: int|null,
     *     symbols?: int|null,
     *     uppercase?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
