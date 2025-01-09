<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InvitationDate' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class OpportunityEngagementInvitationSort extends Shape
{
    /**
     * @param array{
     *     SortBy: 'InvitationDate',
     *     SortOrder: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
