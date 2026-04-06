<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CreateConnectionInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property 'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY' $ConnectionType
 * @property string $Email
 * @property string $Message
 * @property string $Name
 * @property string $ReceiverIdentifier
 */
class CreateConnectionInvitationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     ConnectionType: 'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY',
     *     Email: string,
     *     Message: string,
     *     Name: string,
     *     ReceiverIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
