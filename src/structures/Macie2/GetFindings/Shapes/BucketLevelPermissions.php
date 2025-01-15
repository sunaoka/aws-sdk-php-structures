<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessControlList|null $accessControlList
 * @property BlockPublicAccess|null $blockPublicAccess
 * @property BucketPolicy|null $bucketPolicy
 */
class BucketLevelPermissions extends Shape
{
    /**
     * @param array{
     *     accessControlList?: AccessControlList|null,
     *     blockPublicAccess?: BlockPublicAccess|null,
     *     bucketPolicy?: BucketPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
