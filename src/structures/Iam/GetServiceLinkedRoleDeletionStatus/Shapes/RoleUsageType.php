<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLinkedRoleDeletionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property list<string> $Resources
 */
class RoleUsageType extends Shape
{
    /**
     * @param array{
     *     Region?: string,
     *     Resources?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
