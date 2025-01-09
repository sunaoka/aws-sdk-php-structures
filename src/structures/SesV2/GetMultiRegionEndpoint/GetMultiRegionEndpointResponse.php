<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMultiRegionEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EndpointName
 * @property string $EndpointId
 * @property list<Shapes\Route> $Routes
 * @property 'CREATING'|'READY'|'FAILED'|'DELETING' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class GetMultiRegionEndpointResponse extends Response
{
}
