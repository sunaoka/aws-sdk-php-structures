<?php

namespace Sunaoka\Aws\Structures\Neptune\DeleteDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property bool $SkipFinalSnapshot
 * @property string $FinalDBSnapshotIdentifier
 */
class DeleteDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     SkipFinalSnapshot?: bool,
     *     FinalDBSnapshotIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
