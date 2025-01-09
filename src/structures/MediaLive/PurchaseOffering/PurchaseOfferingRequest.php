<?php

namespace Sunaoka\Aws\Structures\MediaLive\PurchaseOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Count
 * @property string $Name
 * @property string $OfferingId
 * @property Shapes\RenewalSettings $RenewalSettings
 * @property string $RequestId
 * @property string $Start
 * @property array<string, string> $Tags
 */
class PurchaseOfferingRequest extends Request
{
    /**
     * @param array{
     *     Count: int,
     *     Name?: string,
     *     OfferingId: string,
     *     RenewalSettings?: Shapes\RenewalSettings,
     *     RequestId?: string,
     *     Start?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
