<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property bool|null $SkipFinalSnapshot
 * @property string|null $FinalDBSnapshotIdentifier
 * @property bool|null $DeleteAutomatedBackups
 */
class DeleteDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     SkipFinalSnapshot?: bool|null,
     *     FinalDBSnapshotIdentifier?: string|null,
     *     DeleteAutomatedBackups?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
