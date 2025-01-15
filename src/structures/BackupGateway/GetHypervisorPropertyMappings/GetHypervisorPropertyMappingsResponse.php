<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetHypervisorPropertyMappings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $HypervisorArn
 * @property string|null $IamRoleArn
 * @property list<Shapes\VmwareToAwsTagMapping>|null $VmwareToAwsTagMappings
 */
class GetHypervisorPropertyMappingsResponse extends Response
{
}
