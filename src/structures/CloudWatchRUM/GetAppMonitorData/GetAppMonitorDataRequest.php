<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitorData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\QueryFilter> $Filters
 * @property int<0, 100> $MaxResults
 * @property string $Name
 * @property string $NextToken
 * @property Shapes\TimeRange $TimeRange
 */
class GetAppMonitorDataRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\QueryFilter>,
     *     MaxResults?: int<0, 100>,
     *     Name: string,
     *     NextToken?: string,
     *     TimeRange: Shapes\TimeRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
