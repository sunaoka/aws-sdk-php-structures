<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessControlList|null $AccessControlList
 * @property BucketPolicy|null $BucketPolicy
 * @property BlockPublicAccess|null $BlockPublicAccess
 */
class BucketLevelPermissions extends Shape
{
    /**
     * @param array{
     *     AccessControlList?: AccessControlList|null,
     *     BucketPolicy?: BucketPolicy|null,
     *     BlockPublicAccess?: BlockPublicAccess|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
