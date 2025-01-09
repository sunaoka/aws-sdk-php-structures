<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $kmsManaged
 * @property int $s3Managed
 * @property int $unencrypted
 * @property int $unknown
 */
class BucketCountByEncryptionType extends Shape
{
    /**
     * @param array{
     *     kmsManaged?: int,
     *     s3Managed?: int,
     *     unencrypted?: int,
     *     unknown?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
