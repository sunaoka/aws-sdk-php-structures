<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateListener;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property Shapes\RuleAction $defaultAction
 * @property string $id
 * @property string $name
 * @property int<1, 65535> $port
 * @property 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH' $protocol
 * @property string $serviceArn
 * @property string $serviceId
 */
class UpdateListenerResponse extends Response
{
}
