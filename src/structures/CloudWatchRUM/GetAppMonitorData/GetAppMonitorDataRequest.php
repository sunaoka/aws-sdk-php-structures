<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitorData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\TimeRange $TimeRange
 * @property list<Shapes\QueryFilter>|null $Filters
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class GetAppMonitorDataRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     TimeRange: Shapes\TimeRange,
     *     Filters?: list<Shapes\QueryFilter>|null,
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
