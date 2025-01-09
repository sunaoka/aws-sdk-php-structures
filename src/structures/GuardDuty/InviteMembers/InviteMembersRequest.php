<?php

namespace Sunaoka\Aws\Structures\GuardDuty\InviteMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<string> $AccountIds
 * @property bool $DisableEmailNotification
 * @property string $Message
 */
class InviteMembersRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     AccountIds: list<string>,
     *     DisableEmailNotification?: bool,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
