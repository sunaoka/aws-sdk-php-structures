<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property 'InvitationDate' $SortBy
 */
class OpportunityEngagementInvitationSort extends Shape
{
    /**
     * @param array{
     *     SortOrder: 'ASCENDING'|'DESCENDING',
     *     SortBy: 'InvitationDate'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
