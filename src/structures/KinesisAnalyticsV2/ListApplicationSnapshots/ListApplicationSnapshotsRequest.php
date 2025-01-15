<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplicationSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 50>|null $Limit
 * @property string|null $NextToken
 */
class ListApplicationSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     Limit?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
