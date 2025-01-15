<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property bool|null $SkipFinalSnapshot
 * @property string|null $FinalDBSnapshotIdentifier
 */
class DeleteDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     SkipFinalSnapshot?: bool|null,
     *     FinalDBSnapshotIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
