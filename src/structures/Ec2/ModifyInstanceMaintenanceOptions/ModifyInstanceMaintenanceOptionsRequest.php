<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceMaintenanceOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'disabled'|'default'|null $AutoRecovery
 * @property 'disabled'|'default'|null $RebootMigration
 * @property bool|null $DryRun
 */
class ModifyInstanceMaintenanceOptionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AutoRecovery?: 'disabled'|'default'|null,
     *     RebootMigration?: 'disabled'|'default'|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
