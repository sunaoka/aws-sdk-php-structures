<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDataViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListDataViewsRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
