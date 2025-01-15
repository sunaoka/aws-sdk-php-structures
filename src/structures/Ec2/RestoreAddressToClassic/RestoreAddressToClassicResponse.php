<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreAddressToClassic;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PublicIp
 * @property 'MoveInProgress'|'InVpc'|'InClassic'|null $Status
 */
class RestoreAddressToClassicResponse extends Response
{
}
