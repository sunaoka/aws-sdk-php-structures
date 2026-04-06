<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string|null $nextToken
 * @property int<1, 10>|null $maxResults
 */
class ListDataSourcesRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
