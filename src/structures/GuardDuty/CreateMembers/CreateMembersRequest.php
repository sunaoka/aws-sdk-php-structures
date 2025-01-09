<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<Shapes\AccountDetail> $AccountDetails
 */
class CreateMembersRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     AccountDetails: list<Shapes\AccountDetail>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
