<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeSnapshotAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotIdentifier
 * @property string $SnapshotArn
 * @property string $SnapshotClusterIdentifier
 * @property string $AccountWithRestoreAccess
 */
class AuthorizeSnapshotAccessRequest extends Request
{
    /**
     * @param array{
     *     SnapshotIdentifier?: string,
     *     SnapshotArn?: string,
     *     SnapshotClusterIdentifier?: string,
     *     AccountWithRestoreAccess: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
