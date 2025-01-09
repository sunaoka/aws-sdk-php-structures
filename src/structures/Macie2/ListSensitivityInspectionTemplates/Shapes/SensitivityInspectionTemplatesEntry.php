<?php

namespace Sunaoka\Aws\Structures\Macie2\ListSensitivityInspectionTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 */
class SensitivityInspectionTemplatesEntry extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
