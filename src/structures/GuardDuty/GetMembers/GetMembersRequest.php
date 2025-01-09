<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<string> $AccountIds
 */
class GetMembersRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     AccountIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
