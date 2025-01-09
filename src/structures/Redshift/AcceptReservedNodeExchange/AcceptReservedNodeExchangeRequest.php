<?php

namespace Sunaoka\Aws\Structures\Redshift\AcceptReservedNodeExchange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedNodeId
 * @property string $TargetReservedNodeOfferingId
 */
class AcceptReservedNodeExchangeRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodeId: string,
     *     TargetReservedNodeOfferingId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
