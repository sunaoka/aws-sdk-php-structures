<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Description
 * @property string $ImportTaskId
 * @property Shapes\SnapshotTaskDetail $SnapshotTaskDetail
 * @property list<Shapes\Tag> $Tags
 */
class ImportSnapshotResponse extends Response
{
}
