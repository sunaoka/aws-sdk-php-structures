<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountLevelPermissions $accountLevelPermissions
 * @property BucketLevelPermissions $bucketLevelPermissions
 */
class BucketPermissionConfiguration extends Shape
{
    /**
     * @param array{
     *     accountLevelPermissions?: AccountLevelPermissions,
     *     bucketLevelPermissions?: BucketLevelPermissions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
