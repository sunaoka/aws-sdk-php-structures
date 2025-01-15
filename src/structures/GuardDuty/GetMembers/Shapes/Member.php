<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string|null $DetectorId
 * @property string $MasterId
 * @property string $Email
 * @property string $RelationshipStatus
 * @property string|null $InvitedAt
 * @property string $UpdatedAt
 * @property string|null $AdministratorId
 */
class Member extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     DetectorId?: string|null,
     *     MasterId: string,
     *     Email: string,
     *     RelationshipStatus: string,
     *     InvitedAt?: string|null,
     *     UpdatedAt: string,
     *     AdministratorId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
