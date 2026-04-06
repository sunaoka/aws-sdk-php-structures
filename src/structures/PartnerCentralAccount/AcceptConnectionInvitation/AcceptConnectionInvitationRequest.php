<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\AcceptConnectionInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property string $ClientToken
 */
class AcceptConnectionInvitationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
