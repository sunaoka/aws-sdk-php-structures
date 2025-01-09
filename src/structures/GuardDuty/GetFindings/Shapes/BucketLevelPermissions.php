<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessControlList $AccessControlList
 * @property BucketPolicy $BucketPolicy
 * @property BlockPublicAccess $BlockPublicAccess
 */
class BucketLevelPermissions extends Shape
{
    /**
     * @param array{
     *     AccessControlList?: AccessControlList,
     *     BucketPolicy?: BucketPolicy,
     *     BlockPublicAccess?: BlockPublicAccess
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
