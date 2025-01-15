<?php

namespace Sunaoka\Aws\Structures\kendra\GetSnapshots;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\TimeRange|null $SnapShotTimeFilter
 * @property list<string>|null $SnapshotsDataHeader
 * @property list<list<string>>|null $SnapshotsData
 * @property string|null $NextToken
 */
class GetSnapshotsResponse extends Response
{
}
