<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitAttachmentStateChanges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attachmentArn
 * @property string $status
 */
class AttachmentStateChange extends Shape
{
    /**
     * @param array{
     *     attachmentArn: string,
     *     status: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
