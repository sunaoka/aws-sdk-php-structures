<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateAwsAccountWithPartnerAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SidewalkAccountInfo $Sidewalk
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class AssociateAwsAccountWithPartnerAccountRequest extends Request
{
    /**
     * @param array{
     *     Sidewalk: Shapes\SidewalkAccountInfo,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
