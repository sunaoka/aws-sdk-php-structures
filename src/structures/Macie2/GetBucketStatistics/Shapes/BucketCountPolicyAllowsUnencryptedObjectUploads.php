<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $allowsUnencryptedObjectUploads
 * @property int $deniesUnencryptedObjectUploads
 * @property int $unknown
 */
class BucketCountPolicyAllowsUnencryptedObjectUploads extends Shape
{
    /**
     * @param array{
     *     allowsUnencryptedObjectUploads?: int,
     *     deniesUnencryptedObjectUploads?: int,
     *     unknown?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
