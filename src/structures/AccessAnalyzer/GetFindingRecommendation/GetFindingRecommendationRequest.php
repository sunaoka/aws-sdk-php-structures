<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property string $id
 * @property int $maxResults
 * @property string $nextToken
 */
class GetFindingRecommendationRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     id: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
