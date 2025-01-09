<?php

namespace Sunaoka\Aws\Structures\SSMContacts\StartEngagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $Sender
 * @property string $Subject
 * @property string $Content
 * @property string $PublicSubject
 * @property string $PublicContent
 * @property string $IncidentId
 * @property string $IdempotencyToken
 */
class StartEngagementRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     Sender: string,
     *     Subject: string,
     *     Content: string,
     *     PublicSubject?: string,
     *     PublicContent?: string,
     *     IncidentId?: string,
     *     IdempotencyToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
