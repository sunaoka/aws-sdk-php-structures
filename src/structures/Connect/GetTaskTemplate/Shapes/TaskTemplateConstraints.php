<?php

namespace Sunaoka\Aws\Structures\Connect\GetTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RequiredFieldInfo> $RequiredFields
 * @property list<ReadOnlyFieldInfo> $ReadOnlyFields
 * @property list<InvisibleFieldInfo> $InvisibleFields
 */
class TaskTemplateConstraints extends Shape
{
    /**
     * @param array{
     *     RequiredFields?: list<RequiredFieldInfo>,
     *     ReadOnlyFields?: list<ReadOnlyFieldInfo>,
     *     InvisibleFields?: list<InvisibleFieldInfo>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
