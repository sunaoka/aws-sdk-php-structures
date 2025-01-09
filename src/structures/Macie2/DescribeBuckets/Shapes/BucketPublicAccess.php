<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC'|'NOT_PUBLIC'|'UNKNOWN' $effectivePermission
 * @property BucketPermissionConfiguration $permissionConfiguration
 */
class BucketPublicAccess extends Shape
{
    /**
     * @param array{
     *     effectivePermission?: 'PUBLIC'|'NOT_PUBLIC'|'UNKNOWN',
     *     permissionConfiguration?: BucketPermissionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
