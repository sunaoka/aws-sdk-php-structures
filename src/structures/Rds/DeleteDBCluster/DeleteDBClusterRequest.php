<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property bool $SkipFinalSnapshot
 * @property string $FinalDBSnapshotIdentifier
 * @property bool $DeleteAutomatedBackups
 */
class DeleteDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     SkipFinalSnapshot?: bool,
     *     FinalDBSnapshotIdentifier?: string,
     *     DeleteAutomatedBackups?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
