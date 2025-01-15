<?php

namespace Sunaoka\Aws\Structures\Iam\ListEntitiesForPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupName
 * @property string|null $GroupId
 */
class PolicyGroup extends Shape
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     GroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
