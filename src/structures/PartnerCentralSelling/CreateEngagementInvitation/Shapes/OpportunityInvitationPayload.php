<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SenderContact>|null $SenderContacts
 * @property list<'Distributor'|'Reseller'|'Hardware Partner'|'Managed Service Provider'|'Software Partner'|'Services Partner'|'Training Partner'|'Co-Sell Facilitator'|'Facilitator'> $ReceiverResponsibilities
 * @property EngagementCustomer $Customer
 * @property ProjectDetails $Project
 */
class OpportunityInvitationPayload extends Shape
{
    /**
     * @param array{
     *     SenderContacts?: list<SenderContact>|null,
     *     ReceiverResponsibilities: list<'Distributor'|'Reseller'|'Hardware Partner'|'Managed Service Provider'|'Software Partner'|'Services Partner'|'Training Partner'|'Co-Sell Facilitator'|'Facilitator'>,
     *     Customer: EngagementCustomer,
     *     Project: ProjectDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
