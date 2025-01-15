<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AutoAddGroupOwner
 * @property string|null $GroupOwner
 */
class GroupOwnerSetting extends Shape
{
    /**
     * @param array{
     *     AutoAddGroupOwner?: bool|null,
     *     GroupOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
