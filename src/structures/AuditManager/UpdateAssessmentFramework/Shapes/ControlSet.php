<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property list<Control> $controls
 */
class ControlSet extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     controls?: list<Control>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
