<?php

namespace Sunaoka\Aws\Structures\Redshift\RevokeSnapshotAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SnapshotIdentifier
 * @property string|null $SnapshotArn
 * @property string|null $SnapshotClusterIdentifier
 * @property string $AccountWithRestoreAccess
 */
class RevokeSnapshotAccessRequest extends Request
{
    /**
     * @param array{
     *     SnapshotIdentifier?: string|null,
     *     SnapshotArn?: string|null,
     *     SnapshotClusterIdentifier?: string|null,
     *     AccountWithRestoreAccess: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
