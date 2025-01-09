<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeAgent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AgentArn
 * @property string $Name
 * @property 'ONLINE'|'OFFLINE' $Status
 * @property \Aws\Api\DateTimeResult $LastConnectionTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'PUBLIC'|'PRIVATE_LINK'|'FIPS' $EndpointType
 * @property Shapes\PrivateLinkConfig $PrivateLinkConfig
 * @property Shapes\Platform $Platform
 */
class DescribeAgentResponse extends Response
{
}
