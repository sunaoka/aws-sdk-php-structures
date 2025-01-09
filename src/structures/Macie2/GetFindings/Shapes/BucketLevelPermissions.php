<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessControlList $accessControlList
 * @property BlockPublicAccess $blockPublicAccess
 * @property BucketPolicy $bucketPolicy
 */
class BucketLevelPermissions extends Shape
{
    /**
     * @param array{
     *     accessControlList?: AccessControlList,
     *     blockPublicAccess?: BlockPublicAccess,
     *     bucketPolicy?: BucketPolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
