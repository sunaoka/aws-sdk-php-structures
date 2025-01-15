<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoverySnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeRecoverySnapshotsRequestFilters|null $filters
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 * @property 'ASC'|'DESC'|null $order
 * @property string $sourceServerID
 */
class DescribeRecoverySnapshotsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\DescribeRecoverySnapshotsRequestFilters|null,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null,
     *     order?: 'ASC'|'DESC'|null,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
