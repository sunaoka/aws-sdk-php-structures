<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexAlerts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxResults
 * @property string $MultiplexId
 * @property string|null $NextToken
 * @property string|null $StateFilter
 */
class ListMultiplexAlertsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int|null,
     *     MultiplexId: string,
     *     NextToken?: string|null,
     *     StateFilter?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
