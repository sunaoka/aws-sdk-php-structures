<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetwork;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $arn
 * @property Shapes\SharingConfig|null $sharingConfig
 * @property 'NONE'|'AWS_IAM'|null $authType
 */
class CreateServiceNetworkResponse extends Response
{
}
