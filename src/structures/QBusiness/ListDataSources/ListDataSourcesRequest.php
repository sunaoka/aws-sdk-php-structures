<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $nextToken
 * @property int<1, 10> $maxResults
 */
class ListDataSourcesRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
