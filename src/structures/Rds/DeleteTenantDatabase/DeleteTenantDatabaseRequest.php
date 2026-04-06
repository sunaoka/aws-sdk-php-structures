<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteTenantDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $TenantDBName
 * @property bool|null $SkipFinalSnapshot
 * @property string|null $FinalDBSnapshotIdentifier
 */
class DeleteTenantDatabaseRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     TenantDBName: string,
     *     SkipFinalSnapshot?: bool|null,
     *     FinalDBSnapshotIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
