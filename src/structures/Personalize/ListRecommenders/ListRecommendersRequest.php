<?php

namespace Sunaoka\Aws\Structures\Personalize\ListRecommenders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetGroupArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListRecommendersRequest extends Request
{
    /**
     * @param array{
     *     datasetGroupArn?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
