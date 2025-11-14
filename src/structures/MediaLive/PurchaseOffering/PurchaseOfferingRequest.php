<?php

namespace Sunaoka\Aws\Structures\MediaLive\PurchaseOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Count
 * @property string|null $Name
 * @property string $OfferingId
 * @property Shapes\RenewalSettings|null $RenewalSettings
 * @property string|null $RequestId
 * @property string|null $Start
 * @property array<string, string>|null $Tags
 */
class PurchaseOfferingRequest extends Request
{
    /**
     * @param array{
     *     Count: int,
     *     Name?: string|null,
     *     OfferingId: string,
     *     RenewalSettings?: Shapes\RenewalSettings|null,
     *     RequestId?: string|null,
     *     Start?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
