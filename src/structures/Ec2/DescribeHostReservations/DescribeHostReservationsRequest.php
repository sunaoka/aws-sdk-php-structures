<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHostReservations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filter
 * @property list<string> $HostReservationIdSet
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeHostReservationsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: list<Shapes\Filter>,
     *     HostReservationIdSet?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
