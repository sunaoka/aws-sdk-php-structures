<?php

namespace Sunaoka\Aws\Structures\kendra\GetSnapshots;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\TimeRange $SnapShotTimeFilter
 * @property list<string> $SnapshotsDataHeader
 * @property list<list<string>> $SnapshotsData
 * @property string $NextToken
 */
class GetSnapshotsResponse extends Response
{
}
