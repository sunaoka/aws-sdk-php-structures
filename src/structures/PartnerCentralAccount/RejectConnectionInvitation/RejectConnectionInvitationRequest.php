<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\RejectConnectionInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property string $ClientToken
 * @property string|null $Reason
 */
class RejectConnectionInvitationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     ClientToken: string,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
