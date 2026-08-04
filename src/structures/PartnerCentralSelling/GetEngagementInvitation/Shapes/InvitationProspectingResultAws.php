<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProspectingResultCustomer|null $Customer
 * @property ProspectingInsights|null $Insights
 */
class InvitationProspectingResultAws extends Shape
{
    /**
     * @param array{
     *     Customer?: ProspectingResultCustomer|null,
     *     Insights?: ProspectingInsights|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
