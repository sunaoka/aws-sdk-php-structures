<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraphSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snapshotIdentifier
 */
class GetGraphSnapshotRequest extends Request
{
    /**
     * @param array{snapshotIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
