<?php

namespace Sunaoka\Aws\Structures\Iam\ListInstanceProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $LastUsedDate
 * @property string|null $Region
 */
class RoleLastUsed extends Shape
{
    /**
     * @param array{
     *     LastUsedDate?: \Aws\Api\DateTimeResult|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
