<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateSnapshotCopyGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotCopyGrantName
 * @property string|null $KmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSnapshotCopyGrantRequest extends Request
{
    /**
     * @param array{
     *     SnapshotCopyGrantName: string,
     *     KmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
