<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastUsedDate
 * @property string $Region
 */
class RoleLastUsed extends Shape
{
    /**
     * @param array{
     *     LastUsedDate?: \Aws\Api\DateTimeResult,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
