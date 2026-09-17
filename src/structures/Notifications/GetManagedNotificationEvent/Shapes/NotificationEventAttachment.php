<?php

namespace Sunaoka\Aws\Structures\Notifications\GetManagedNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property string|null $attachmentDownloadUrl
 * @property string $contentType
 */
class NotificationEventAttachment extends Shape
{
    /**
     * @param array{
     *     displayName: string,
     *     attachmentDownloadUrl?: string|null,
     *     contentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
