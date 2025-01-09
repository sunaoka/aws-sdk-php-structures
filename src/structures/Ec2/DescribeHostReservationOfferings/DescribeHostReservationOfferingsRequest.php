<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHostReservationOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filter
 * @property int $MaxDuration
 * @property int<5, 500> $MaxResults
 * @property int $MinDuration
 * @property string $NextToken
 * @property string $OfferingId
 */
class DescribeHostReservationOfferingsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: list<Shapes\Filter>,
     *     MaxDuration?: int,
     *     MaxResults?: int<5, 500>,
     *     MinDuration?: int,
     *     NextToken?: string,
     *     OfferingId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
