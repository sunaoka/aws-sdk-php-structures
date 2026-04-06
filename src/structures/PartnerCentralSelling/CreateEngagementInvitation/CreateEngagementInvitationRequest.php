<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $EngagementIdentifier
 * @property Shapes\Invitation $Invitation
 */
class CreateEngagementInvitationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     EngagementIdentifier: string,
     *     Invitation: Shapes\Invitation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
