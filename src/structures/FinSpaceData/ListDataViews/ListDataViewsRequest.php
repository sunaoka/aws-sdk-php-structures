<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDataViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDataViewsRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
