<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BucketLevelPermissions $BucketLevelPermissions
 * @property AccountLevelPermissions $AccountLevelPermissions
 */
class PermissionConfiguration extends Shape
{
    /**
     * @param array{
     *     BucketLevelPermissions?: BucketLevelPermissions,
     *     AccountLevelPermissions?: AccountLevelPermissions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
