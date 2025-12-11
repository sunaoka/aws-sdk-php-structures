<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListClusterAlerts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $StateFilter
 */
class ListClusterAlertsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
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
