<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHostReservationOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filter
 * @property int|null $MaxDuration
 * @property int<5, 500>|null $MaxResults
 * @property int|null $MinDuration
 * @property string|null $NextToken
 * @property string|null $OfferingId
 */
class DescribeHostReservationOfferingsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: list<Shapes\Filter>|null,
     *     MaxDuration?: int|null,
     *     MaxResults?: int<5, 500>|null,
     *     MinDuration?: int|null,
     *     NextToken?: string|null,
     *     OfferingId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
