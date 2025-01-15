<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLinkedRoleDeletionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property list<string>|null $Resources
 */
class RoleUsageType extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     Resources?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
