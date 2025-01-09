<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DisassociateAwsAccountFromPartnerAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PartnerAccountId
 * @property 'Sidewalk' $PartnerType
 */
class DisassociateAwsAccountFromPartnerAccountRequest extends Request
{
    /**
     * @param array{
     *     PartnerAccountId: string,
     *     PartnerType: 'Sidewalk'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
