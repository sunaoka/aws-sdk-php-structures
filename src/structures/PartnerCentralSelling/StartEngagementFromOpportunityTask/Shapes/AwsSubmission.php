<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartEngagementFromOpportunityTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'For Visibility Only'|'Co-Sell' $InvolvementType
 * @property 'Full'|'Limited'|null $Visibility
 */
class AwsSubmission extends Shape
{
    /**
     * @param array{
     *     InvolvementType: 'For Visibility Only'|'Co-Sell',
     *     Visibility?: 'Full'|'Limited'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
