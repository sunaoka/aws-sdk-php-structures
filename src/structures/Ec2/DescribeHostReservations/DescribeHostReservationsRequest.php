<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHostReservations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filter
 * @property list<string>|null $HostReservationIdSet
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeHostReservationsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: list<Shapes\Filter>|null,
     *     HostReservationIdSet?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
