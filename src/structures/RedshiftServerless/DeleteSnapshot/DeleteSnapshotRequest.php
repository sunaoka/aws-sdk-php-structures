<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snapshotName
 */
class DeleteSnapshotRequest extends Request
{
    /**
     * @param array{snapshotName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
