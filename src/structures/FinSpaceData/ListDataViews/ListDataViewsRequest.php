<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDataViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListDataViewsRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
