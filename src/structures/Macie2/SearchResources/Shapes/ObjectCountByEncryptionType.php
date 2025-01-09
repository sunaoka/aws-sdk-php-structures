<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $customerManaged
 * @property int $kmsManaged
 * @property int $s3Managed
 * @property int $unencrypted
 * @property int $unknown
 */
class ObjectCountByEncryptionType extends Shape
{
    /**
     * @param array{
     *     customerManaged?: int,
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
