<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $kmsManaged
 * @property int|null $s3Managed
 * @property int|null $unencrypted
 * @property int|null $unknown
 */
class BucketCountByEncryptionType extends Shape
{
    /**
     * @param array{
     *     kmsManaged?: int|null,
     *     s3Managed?: int|null,
     *     unencrypted?: int|null,
     *     unknown?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
