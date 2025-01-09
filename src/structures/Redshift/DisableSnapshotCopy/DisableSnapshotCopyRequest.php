<?php

namespace Sunaoka\Aws\Structures\Redshift\DisableSnapshotCopy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 */
class DisableSnapshotCopyRequest extends Request
{
    /**
     * @param array{ClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
