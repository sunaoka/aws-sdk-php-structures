<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListChangesets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListChangesetsRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
