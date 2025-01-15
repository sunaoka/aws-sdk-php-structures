<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $volumeArns
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 * @property list<Shapes\EBSFilter>|null $filters
 * @property list<string>|null $accountIds
 */
class GetEBSVolumeRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     volumeArns?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null,
     *     filters?: list<Shapes\EBSFilter>|null,
     *     accountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
