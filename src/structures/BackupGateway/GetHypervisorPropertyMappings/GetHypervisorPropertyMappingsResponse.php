<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetHypervisorPropertyMappings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HypervisorArn
 * @property string $IamRoleArn
 * @property list<Shapes\VmwareToAwsTagMapping> $VmwareToAwsTagMappings
 */
class GetHypervisorPropertyMappingsResponse extends Response
{
}
