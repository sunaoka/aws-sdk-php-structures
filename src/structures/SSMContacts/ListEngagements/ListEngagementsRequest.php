<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListEngagements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<0, 1024> $MaxResults
 * @property string $IncidentId
 * @property Shapes\TimeRange $TimeRangeValue
 */
class ListEngagementsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<0, 1024>,
     *     IncidentId?: string,
     *     TimeRangeValue?: Shapes\TimeRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
