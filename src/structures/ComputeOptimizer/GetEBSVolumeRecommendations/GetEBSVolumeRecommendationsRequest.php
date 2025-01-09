<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $volumeArns
 * @property string $nextToken
 * @property int<0, 1000> $maxResults
 * @property list<Shapes\EBSFilter> $filters
 * @property list<string> $accountIds
 */
class GetEBSVolumeRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     volumeArns?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<0, 1000>,
     *     filters?: list<Shapes\EBSFilter>,
     *     accountIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
