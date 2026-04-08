<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoverySnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property Shapes\DescribeRecoverySnapshotsRequestFilters|null $filters
 * @property 'ASC'|'DESC'|null $order
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeRecoverySnapshotsRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     filters?: Shapes\DescribeRecoverySnapshotsRequestFilters|null,
     *     order?: 'ASC'|'DESC'|null,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
