<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\RejectEngagementInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property string|null $RejectionReason
 */
class RejectEngagementInvitationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     RejectionReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
