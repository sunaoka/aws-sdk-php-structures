<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpportunityInvitationPayload $OpportunityInvitation
 */
class Payload extends Shape
{
    /**
     * @param array{OpportunityInvitation?: OpportunityInvitationPayload} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
