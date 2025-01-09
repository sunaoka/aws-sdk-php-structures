<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SnapshotId
 * @property 'PENDING'|'CREATING'|'DELETING'|'AVAILABLE' $Lifecycle
 */
class DeleteSnapshotResponse extends Response
{
}
