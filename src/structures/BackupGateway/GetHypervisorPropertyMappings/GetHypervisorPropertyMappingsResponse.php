<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetHypervisorPropertyMappings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $HypervisorArn
 * @property list<Shapes\VmwareToAwsTagMapping>|null $VmwareToAwsTagMappings
 * @property string|null $IamRoleArn
 */
class GetHypervisorPropertyMappingsResponse extends Response
{
}
