<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Description
 * @property string|null $ImportTaskId
 * @property Shapes\SnapshotTaskDetail|null $SnapshotTaskDetail
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportSnapshotResponse extends Response
{
}
