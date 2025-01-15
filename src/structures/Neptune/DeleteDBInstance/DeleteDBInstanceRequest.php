<?php

namespace Sunaoka\Aws\Structures\Neptune\DeleteDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property bool|null $SkipFinalSnapshot
 * @property string|null $FinalDBSnapshotIdentifier
 */
class DeleteDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     SkipFinalSnapshot?: bool|null,
     *     FinalDBSnapshotIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
