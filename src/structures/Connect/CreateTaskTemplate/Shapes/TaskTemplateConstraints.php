<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RequiredFieldInfo>|null $RequiredFields
 * @property list<ReadOnlyFieldInfo>|null $ReadOnlyFields
 * @property list<InvisibleFieldInfo>|null $InvisibleFields
 */
class TaskTemplateConstraints extends Shape
{
    /**
     * @param array{
     *     RequiredFields?: list<RequiredFieldInfo>|null,
     *     ReadOnlyFields?: list<ReadOnlyFieldInfo>|null,
     *     InvisibleFields?: list<InvisibleFieldInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
