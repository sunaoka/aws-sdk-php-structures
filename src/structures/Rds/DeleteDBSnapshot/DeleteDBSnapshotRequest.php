<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSnapshotIdentifier
 */
class DeleteDBSnapshotRequest extends Request
{
    /**
     * @param array{DBSnapshotIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
