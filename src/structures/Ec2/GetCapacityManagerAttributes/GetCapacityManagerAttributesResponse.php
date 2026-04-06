<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerAttributes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'enabled'|'disabled'|null $CapacityManagerStatus
 * @property bool|null $OrganizationsAccess
 * @property int|null $DataExportCount
 * @property 'initial-ingestion-in-progress'|'ingestion-complete'|'ingestion-failed'|null $IngestionStatus
 * @property string|null $IngestionStatusMessage
 * @property \Aws\Api\DateTimeResult|null $EarliestDatapointTimestamp
 * @property \Aws\Api\DateTimeResult|null $LatestDatapointTimestamp
 */
class GetCapacityManagerAttributesResponse extends Response
{
}
