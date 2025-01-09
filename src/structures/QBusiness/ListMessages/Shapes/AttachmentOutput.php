<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'FAILED'|'SUCCESS' $status
 * @property ErrorDetail $error
 * @property string $attachmentId
 * @property string $conversationId
 */
class AttachmentOutput extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     status?: 'FAILED'|'SUCCESS',
     *     error?: ErrorDetail,
     *     attachmentId?: string,
     *     conversationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
