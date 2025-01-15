<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateSnapshotCopyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotCopyGrantName
 * @property string|null $KmsKeyId
 * @property list<Tag>|null $Tags
 */
class SnapshotCopyGrant extends Shape
{
    /**
     * @param array{
     *     SnapshotCopyGrantName?: string|null,
     *     KmsKeyId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
