<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property string $id
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class GetFindingRecommendationRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     id: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
