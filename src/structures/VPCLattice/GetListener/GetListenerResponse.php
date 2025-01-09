<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetListener;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\RuleAction $defaultAction
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property int<1, 65535> $port
 * @property 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH' $protocol
 * @property string $serviceArn
 * @property string $serviceId
 */
class GetListenerResponse extends Response
{
}
