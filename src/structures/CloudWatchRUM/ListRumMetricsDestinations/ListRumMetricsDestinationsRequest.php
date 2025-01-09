<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\ListRumMetricsDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppMonitorName
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListRumMetricsDestinationsRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorName: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
