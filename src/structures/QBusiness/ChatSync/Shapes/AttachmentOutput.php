<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'FAILED'|'SUCCESS'|null $status
 * @property ErrorDetail|null $error
 * @property string|null $attachmentId
 * @property string|null $conversationId
 */
class AttachmentOutput extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     status?: 'FAILED'|'SUCCESS'|null,
     *     error?: ErrorDetail|null,
     *     attachmentId?: string|null,
     *     conversationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
