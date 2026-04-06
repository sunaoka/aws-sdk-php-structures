<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeFleetMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $FleetName
 * @property string|null $DisplayName
 * @property bool|null $OptimizeForEndUserLocation
 * @property string|null $CompanyCode
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED_TO_CREATE'|'FAILED_TO_DELETE'|null $FleetStatus
 * @property array<string, string>|null $Tags
 */
class DescribeFleetMetadataResponse extends Response
{
}
