<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpportunityInvitationPayload|null $OpportunityInvitation
 */
class Payload extends Shape
{
    /**
     * @param array{OpportunityInvitation?: OpportunityInvitationPayload|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
