<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetAdministratorAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $InvitationId
 * @property string|null $RelationshipStatus
 * @property string|null $InvitedAt
 */
class Administrator extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     InvitationId?: string|null,
     *     RelationshipStatus?: string|null,
     *     InvitedAt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
