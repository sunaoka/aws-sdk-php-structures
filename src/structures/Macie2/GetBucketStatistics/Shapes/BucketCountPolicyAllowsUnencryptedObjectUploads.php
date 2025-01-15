<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $allowsUnencryptedObjectUploads
 * @property int|null $deniesUnencryptedObjectUploads
 * @property int|null $unknown
 */
class BucketCountPolicyAllowsUnencryptedObjectUploads extends Shape
{
    /**
     * @param array{
     *     allowsUnencryptedObjectUploads?: int|null,
     *     deniesUnencryptedObjectUploads?: int|null,
     *     unknown?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
