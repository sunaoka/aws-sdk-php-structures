<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTableAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Strict
 * @property list<string>|null $Values
 */
class ValidationEnum extends Shape
{
    /**
     * @param array{
     *     Strict?: bool|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
