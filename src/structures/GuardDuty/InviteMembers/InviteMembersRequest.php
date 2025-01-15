<?php

namespace Sunaoka\Aws\Structures\GuardDuty\InviteMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<string> $AccountIds
 * @property bool|null $DisableEmailNotification
 * @property string|null $Message
 */
class InviteMembersRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     AccountIds: list<string>,
     *     DisableEmailNotification?: bool|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
