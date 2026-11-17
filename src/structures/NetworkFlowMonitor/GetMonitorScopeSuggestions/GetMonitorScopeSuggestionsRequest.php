<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetMonitorScopeSuggestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorArn
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class GetMonitorScopeSuggestionsRequest extends Request
{
    /**
     * @param array{
     *     monitorArn: string,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
