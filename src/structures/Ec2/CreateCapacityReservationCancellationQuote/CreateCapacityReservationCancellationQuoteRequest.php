<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationCancellationQuote;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property string|null $ClientToken
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateCapacityReservationCancellationQuoteRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
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
