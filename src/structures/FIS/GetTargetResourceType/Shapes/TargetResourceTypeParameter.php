<?php

namespace Sunaoka\Aws\Structures\FIS\GetTargetResourceType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property bool $required
 */
class TargetResourceTypeParameter extends Shape
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
