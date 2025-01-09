<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitAttachmentStateChanges;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<Shapes\AttachmentStateChange> $attachments
 */
class SubmitAttachmentStateChangesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     attachments: list<Shapes\AttachmentStateChange>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
