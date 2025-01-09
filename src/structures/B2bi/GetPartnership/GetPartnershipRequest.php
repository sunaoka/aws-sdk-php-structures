<?php

namespace Sunaoka\Aws\Structures\B2bi\GetPartnership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $partnershipId
 */
class GetPartnershipRequest extends Request
{
    /**
     * @param array{partnershipId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
