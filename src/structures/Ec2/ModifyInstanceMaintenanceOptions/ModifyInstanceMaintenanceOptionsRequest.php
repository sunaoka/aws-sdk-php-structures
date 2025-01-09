<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceMaintenanceOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'disabled'|'default' $AutoRecovery
 * @property bool $DryRun
 */
class ModifyInstanceMaintenanceOptionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AutoRecovery?: 'disabled'|'default',
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
