<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplicationSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 50> $Limit
 * @property string $NextToken
 */
class ListApplicationSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     Limit?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
