<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\ListRumMetricsDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppMonitorName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRumMetricsDestinationsRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
