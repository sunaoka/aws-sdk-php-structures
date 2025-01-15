<?php

namespace Sunaoka\Aws\Structures\Amplify\ListArtifacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string $jobId
 * @property string|null $nextToken
 * @property int<0, 50>|null $maxResults
 */
class ListArtifactsRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     jobId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
