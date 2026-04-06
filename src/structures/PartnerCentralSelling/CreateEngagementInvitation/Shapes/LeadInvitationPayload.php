<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LeadInvitationCustomer $Customer
 * @property LeadInvitationInteraction $Interaction
 */
class LeadInvitationPayload extends Shape
{
    /**
     * @param array{
     *     Customer: LeadInvitationCustomer,
     *     Interaction: LeadInvitationInteraction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
