<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property bool|null $disableEmailNotification
 * @property string|null $message
 */
class CreateInvitationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds: list<string>,
     *     disableEmailNotification?: bool|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
