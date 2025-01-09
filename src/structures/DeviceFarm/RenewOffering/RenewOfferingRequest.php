<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\RenewOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $offeringId
 * @property int $quantity
 */
class RenewOfferingRequest extends Request
{
    /**
     * @param array{
     *     offeringId: string,
     *     quantity: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
