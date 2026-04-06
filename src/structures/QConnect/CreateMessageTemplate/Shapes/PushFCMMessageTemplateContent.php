<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $title
 * @property MessageTemplateBodyContentProvider|null $body
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL'|null $action
 * @property string|null $sound
 * @property string|null $url
 * @property string|null $imageUrl
 * @property string|null $imageIconUrl
 * @property string|null $smallImageIconUrl
 * @property MessageTemplateBodyContentProvider|null $rawContent
 */
class PushFCMMessageTemplateContent extends Shape
{
    /**
     * @param array{
     *     title?: string|null,
     *     body?: MessageTemplateBodyContentProvider|null,
     *     action?: 'OPEN_APP'|'DEEP_LINK'|'URL'|null,
     *     sound?: string|null,
     *     url?: string|null,
     *     imageUrl?: string|null,
     *     imageIconUrl?: string|null,
     *     smallImageIconUrl?: string|null,
     *     rawContent?: MessageTemplateBodyContentProvider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
