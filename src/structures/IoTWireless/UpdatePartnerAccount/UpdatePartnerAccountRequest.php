<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdatePartnerAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SidewalkUpdateAccount $Sidewalk
 * @property string $PartnerAccountId
 * @property 'Sidewalk' $PartnerType
 */
class UpdatePartnerAccountRequest extends Request
{
    /**
     * @param array{
     *     Sidewalk: Shapes\SidewalkUpdateAccount,
     *     PartnerAccountId: string,
     *     PartnerType: 'Sidewalk'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
