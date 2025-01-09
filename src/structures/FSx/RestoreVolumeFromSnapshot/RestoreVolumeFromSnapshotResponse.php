<?php

namespace Sunaoka\Aws\Structures\FSx\RestoreVolumeFromSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VolumeId
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING'|'AVAILABLE' $Lifecycle
 * @property list<Shapes\AdministrativeAction> $AdministrativeActions
 */
class RestoreVolumeFromSnapshotResponse extends Response
{
}
