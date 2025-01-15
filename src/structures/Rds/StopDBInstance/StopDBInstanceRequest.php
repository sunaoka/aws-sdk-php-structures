<?php

namespace Sunaoka\Aws\Structures\Rds\StopDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string|null $DBSnapshotIdentifier
 */
class StopDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     DBSnapshotIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
