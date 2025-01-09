<?php

namespace Sunaoka\Aws\Structures\Ec2\GetHostReservationPurchasePreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $HostIdSet
 * @property string $OfferingId
 */
class GetHostReservationPurchasePreviewRequest extends Request
{
    /**
     * @param array{
     *     HostIdSet: list<string>,
     *     OfferingId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
