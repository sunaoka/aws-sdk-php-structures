<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateSnapshotCopyGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotCopyGrantName
 * @property string $KmsKeyId
 * @property list<Shapes\Tag> $Tags
 */
class CreateSnapshotCopyGrantRequest extends Request
{
    /**
     * @param array{
     *     SnapshotCopyGrantName: string,
     *     KmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
