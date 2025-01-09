<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property bool $SkipFinalSnapshot
 * @property string $FinalDBSnapshotIdentifier
 */
class DeleteDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     SkipFinalSnapshot?: bool,
     *     FinalDBSnapshotIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
