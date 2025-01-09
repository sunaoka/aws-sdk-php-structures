<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteSnapshotCopyGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotCopyGrantName
 */
class DeleteSnapshotCopyGrantRequest extends Request
{
    /**
     * @param array{SnapshotCopyGrantName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
