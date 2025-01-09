<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeSnapshotCopyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotCopyGrantName
 * @property string $KmsKeyId
 * @property list<Tag> $Tags
 */
class SnapshotCopyGrant extends Shape
{
    /**
     * @param array{
     *     SnapshotCopyGrantName?: string,
     *     KmsKeyId?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
