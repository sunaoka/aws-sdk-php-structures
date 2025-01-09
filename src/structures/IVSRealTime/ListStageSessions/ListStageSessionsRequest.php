<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListStageSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListStageSessionsRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
