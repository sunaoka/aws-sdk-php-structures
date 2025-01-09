<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EngagementCustomer $Customer
 * @property ProjectDetails $Project
 * @property list<'Distributor'|'Reseller'|'Hardware Partner'|'Managed Service Provider'|'Software Partner'|'Services Partner'|'Training Partner'|'Co-Sell Facilitator'|'Facilitator'> $ReceiverResponsibilities
 * @property list<SenderContact> $SenderContacts
 */
class OpportunityInvitationPayload extends Shape
{
    /**
     * @param array{
     *     Customer: EngagementCustomer,
     *     Project: ProjectDetails,
     *     ReceiverResponsibilities: list<'Distributor'|'Reseller'|'Hardware Partner'|'Managed Service Provider'|'Software Partner'|'Services Partner'|'Training Partner'|'Co-Sell Facilitator'|'Facilitator'>,
     *     SenderContacts?: list<SenderContact>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
