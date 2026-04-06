<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMultiRegionEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EndpointName
 * @property string|null $EndpointId
 * @property list<Shapes\Route>|null $Routes
 * @property 'CREATING'|'READY'|'FAILED'|'DELETING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class GetMultiRegionEndpointResponse extends Response
{
}
