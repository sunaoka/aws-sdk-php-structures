<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListGeneratedCodeJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string $SnapshotId
 */
class ListGeneratedCodeJobsRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     SnapshotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
