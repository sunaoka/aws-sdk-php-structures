<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationDateChangeQuote;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property \Aws\Api\DateTimeResult $NewStartDate
 * @property string|null $ClientToken
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateCapacityReservationDateChangeQuoteRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
     *     NewStartDate: \Aws\Api\DateTimeResult,
     *     ClientToken?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
