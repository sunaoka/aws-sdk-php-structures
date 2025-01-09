<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateMailboxQuota;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $UserId
 * @property int $MailboxQuota
 */
class UpdateMailboxQuotaRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     UserId: string,
     *     MailboxQuota: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
