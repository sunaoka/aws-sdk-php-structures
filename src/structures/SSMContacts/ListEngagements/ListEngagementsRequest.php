<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListEngagements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 1024>|null $MaxResults
 * @property string|null $IncidentId
 * @property Shapes\TimeRange|null $TimeRangeValue
 */
class ListEngagementsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1024>|null,
     *     IncidentId?: string|null,
     *     TimeRangeValue?: Shapes\TimeRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
