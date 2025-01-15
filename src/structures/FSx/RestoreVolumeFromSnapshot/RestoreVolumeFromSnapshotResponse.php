<?php

namespace Sunaoka\Aws\Structures\FSx\RestoreVolumeFromSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VolumeId
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING'|'AVAILABLE'|null $Lifecycle
 * @property list<Shapes\AdministrativeAction>|null $AdministrativeActions
 */
class RestoreVolumeFromSnapshotResponse extends Response
{
}
