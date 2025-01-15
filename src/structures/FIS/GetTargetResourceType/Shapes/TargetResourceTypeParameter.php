<?php

namespace Sunaoka\Aws\Structures\FIS\GetTargetResourceType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property bool|null $required
 */
class TargetResourceTypeParameter extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     required?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
