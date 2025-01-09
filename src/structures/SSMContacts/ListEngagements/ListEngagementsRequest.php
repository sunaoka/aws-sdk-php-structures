<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListEngagements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $IncidentId
 * @property Shapes\TimeRange $TimeRangeValue
 */
class ListEngagementsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     IncidentId?: string,
     *     TimeRangeValue?: Shapes\TimeRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
