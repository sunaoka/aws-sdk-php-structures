<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoverySnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeRecoverySnapshotsRequestFilters $filters
 * @property int $maxResults
 * @property string $nextToken
 * @property 'ASC'|'DESC' $order
 * @property string $sourceServerID
 */
class DescribeRecoverySnapshotsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\DescribeRecoverySnapshotsRequestFilters,
     *     maxResults?: int,
     *     nextToken?: string,
     *     order?: 'ASC'|'DESC',
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
