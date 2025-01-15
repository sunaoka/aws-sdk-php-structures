<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountLevelPermissions|null $accountLevelPermissions
 * @property BucketLevelPermissions|null $bucketLevelPermissions
 */
class BucketPermissionConfiguration extends Shape
{
    /**
     * @param array{
     *     accountLevelPermissions?: AccountLevelPermissions|null,
     *     bucketLevelPermissions?: BucketLevelPermissions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
