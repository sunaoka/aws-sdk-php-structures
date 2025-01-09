<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $DetectorId
 * @property string $MasterId
 * @property string $Email
 * @property string $RelationshipStatus
 * @property string $InvitedAt
 * @property string $UpdatedAt
 * @property string $AdministratorId
 */
class Member extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     DetectorId?: string,
     *     MasterId: string,
     *     Email: string,
     *     RelationshipStatus: string,
     *     InvitedAt?: string,
     *     UpdatedAt: string,
     *     AdministratorId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
