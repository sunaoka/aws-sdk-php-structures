<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListStageSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListStageSessionsRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
