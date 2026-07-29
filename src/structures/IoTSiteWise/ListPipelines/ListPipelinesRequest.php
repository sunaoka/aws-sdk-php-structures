<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListPipelines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListPipelinesRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
