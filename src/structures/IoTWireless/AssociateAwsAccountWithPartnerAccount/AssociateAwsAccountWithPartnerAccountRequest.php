<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateAwsAccountWithPartnerAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SidewalkAccountInfo $Sidewalk
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class AssociateAwsAccountWithPartnerAccountRequest extends Request
{
    /**
     * @param array{
     *     Sidewalk: Shapes\SidewalkAccountInfo,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
