<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListAlerts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $StateFilter
 */
class ListAlertsRequest extends Request
{
    /**
     * @param array{
     *     ChannelId: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     StateFilter?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
