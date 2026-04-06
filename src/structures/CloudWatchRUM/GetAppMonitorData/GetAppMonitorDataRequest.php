<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitorData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\QueryFilter>|null $Filters
 * @property int<0, 100>|null $MaxResults
 * @property string $Name
 * @property string|null $NextToken
 * @property Shapes\TimeRange $TimeRange
 */
class GetAppMonitorDataRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\QueryFilter>|null,
     *     MaxResults?: int<0, 100>|null,
     *     Name: string,
     *     NextToken?: string|null,
     *     TimeRange: Shapes\TimeRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
