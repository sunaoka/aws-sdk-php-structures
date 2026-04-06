<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeAgent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AgentArn
 * @property string|null $Name
 * @property 'ONLINE'|'OFFLINE'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastConnectionTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'PUBLIC'|'PRIVATE_LINK'|'FIPS'|null $EndpointType
 * @property Shapes\PrivateLinkConfig|null $PrivateLinkConfig
 */
class DescribeAgentResponse extends Response
{
}
