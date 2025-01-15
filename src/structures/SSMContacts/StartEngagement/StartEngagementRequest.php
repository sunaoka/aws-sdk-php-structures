<?php

namespace Sunaoka\Aws\Structures\SSMContacts\StartEngagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $Sender
 * @property string $Subject
 * @property string $Content
 * @property string|null $PublicSubject
 * @property string|null $PublicContent
 * @property string|null $IncidentId
 * @property string|null $IdempotencyToken
 */
class StartEngagementRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     Sender: string,
     *     Subject: string,
     *     Content: string,
     *     PublicSubject?: string|null,
     *     PublicContent?: string|null,
     *     IncidentId?: string|null,
     *     IdempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
