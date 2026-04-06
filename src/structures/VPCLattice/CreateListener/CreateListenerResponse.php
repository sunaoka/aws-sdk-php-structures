<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateListener;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property Shapes\RuleAction|null $defaultAction
 * @property string|null $id
 * @property string|null $name
 * @property int<1, 65535>|null $port
 * @property 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH'|null $protocol
 * @property string|null $serviceArn
 * @property string|null $serviceId
 */
class CreateListenerResponse extends Response
{
}
