<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property bool $SkipFinalSnapshot
 * @property string $FinalDBSnapshotIdentifier
 * @property bool $DeleteAutomatedBackups
 */
class DeleteDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
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
