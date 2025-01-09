<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ApplyPendingMaintenanceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceArn
 * @property string $ApplyAction
 * @property string $OptInType
 */
class ApplyPendingMaintenanceActionRequest extends Request
{
    /**
     * @param array{
     *     ReplicationInstanceArn: string,
     *     ApplyAction: string,
     *     OptInType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
