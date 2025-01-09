<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetResourceDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AutoAddGroupOwner
 * @property string $GroupOwner
 */
class GroupOwnerSetting extends Shape
{
    /**
     * @param array{
     *     AutoAddGroupOwner?: bool,
     *     GroupOwner?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
