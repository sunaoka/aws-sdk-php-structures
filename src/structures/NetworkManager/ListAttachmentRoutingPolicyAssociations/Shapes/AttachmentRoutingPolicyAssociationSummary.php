<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListAttachmentRoutingPolicyAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttachmentId
 * @property list<string>|null $PendingRoutingPolicies
 * @property list<string>|null $AssociatedRoutingPolicies
 * @property string|null $RoutingPolicyLabel
 */
class AttachmentRoutingPolicyAssociationSummary extends Shape
{
    /**
     * @param array{
     *     AttachmentId?: string|null,
     *     PendingRoutingPolicies?: list<string>|null,
     *     AssociatedRoutingPolicies?: list<string>|null,
     *     RoutingPolicyLabel?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
