<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SnapshotId
 * @property 'PENDING'|'CREATING'|'DELETING'|'AVAILABLE'|null $Lifecycle
 */
class DeleteSnapshotResponse extends Response
{
}
