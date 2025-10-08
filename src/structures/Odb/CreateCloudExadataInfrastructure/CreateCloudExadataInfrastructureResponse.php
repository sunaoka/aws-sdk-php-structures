<?php

namespace Sunaoka\Aws\Structures\Odb\CreateCloudExadataInfrastructure;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $displayName
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property string $cloudExadataInfrastructureId
 */
class CreateCloudExadataInfrastructureResponse extends Response
{
}
