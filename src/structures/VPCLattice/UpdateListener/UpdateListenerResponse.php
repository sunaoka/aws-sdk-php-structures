<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateListener;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH'|null $protocol
 * @property int<1, 65535>|null $port
 * @property string|null $serviceArn
 * @property string|null $serviceId
 * @property Shapes\RuleAction|null $defaultAction
 */
class UpdateListenerResponse extends Response
{
}
