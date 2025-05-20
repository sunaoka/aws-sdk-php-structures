<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceMaintenanceOptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InstanceId
 * @property 'disabled'|'default'|null $AutoRecovery
 * @property 'disabled'|'default'|null $RebootMigration
 */
class ModifyInstanceMaintenanceOptionsResponse extends Response
{
}
