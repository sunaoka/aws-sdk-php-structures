<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\DeleteGraphSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snapshotIdentifier
 */
class DeleteGraphSnapshotRequest extends Request
{
    /**
     * @param array{snapshotIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
