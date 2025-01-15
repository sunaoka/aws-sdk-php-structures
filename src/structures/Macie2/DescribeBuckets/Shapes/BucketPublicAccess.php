<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC'|'NOT_PUBLIC'|'UNKNOWN'|null $effectivePermission
 * @property BucketPermissionConfiguration|null $permissionConfiguration
 */
class BucketPublicAccess extends Shape
{
    /**
     * @param array{
     *     effectivePermission?: 'PUBLIC'|'NOT_PUBLIC'|'UNKNOWN'|null,
     *     permissionConfiguration?: BucketPermissionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
