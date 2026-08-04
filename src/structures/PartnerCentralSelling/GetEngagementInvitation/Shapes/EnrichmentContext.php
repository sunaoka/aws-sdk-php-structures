<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvitationProspectingResultAws|null $ProspectingResultAws
 * @property LeadInsights|null $LeadInsights
 */
class EnrichmentContext extends Shape
{
    /**
     * @param array{
     *     ProspectingResultAws?: InvitationProspectingResultAws|null,
     *     LeadInsights?: LeadInsights|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
