<?php

namespace Sunaoka\Aws\Structures\FIS\GetAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property bool $required
 */
class ActionParameter extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     required?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
