<?php

namespace Sunaoka\Aws\Structures\Signin\GetResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $effect
 * @property array<string, string>|null $principal
 * @property list<string>|null $action
 * @property string|null $resource
 * @property array<string, array<string, list<string>>>|null $condition
 */
class PolicyStatement extends Shape
{
    /**
     * @param array{
     *     effect?: string|null,
     *     principal?: array<string, string>|null,
     *     action?: list<string>|null,
     *     resource?: string|null,
     *     condition?: array<string, array<string, list<string>>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
