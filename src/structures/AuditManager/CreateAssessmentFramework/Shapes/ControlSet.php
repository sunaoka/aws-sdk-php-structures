<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessmentFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property list<Control>|null $controls
 */
class ControlSet extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     controls?: list<Control>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
