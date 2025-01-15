<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BucketLevelPermissions|null $BucketLevelPermissions
 * @property AccountLevelPermissions|null $AccountLevelPermissions
 */
class PermissionConfiguration extends Shape
{
    /**
     * @param array{
     *     BucketLevelPermissions?: BucketLevelPermissions|null,
     *     AccountLevelPermissions?: AccountLevelPermissions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
