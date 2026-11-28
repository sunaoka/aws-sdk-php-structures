<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property bool|null $SkipFinalSnapshot
 * @property string|null $FinalDBSnapshotIdentifier
 * @property bool|null $DeleteAutomatedBackups
 * @property bool|null $DeleteDBInstances
 */
class DeleteDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     SkipFinalSnapshot?: bool|null,
     *     FinalDBSnapshotIdentifier?: string|null,
     *     DeleteAutomatedBackups?: bool|null,
     *     DeleteDBInstances?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
