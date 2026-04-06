<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachments $attachments
 * @property string $jobId
 */
class JobAttachmentDetailsEntity extends Shape
{
    /**
     * @param array{
     *     attachments: Attachments,
     *     jobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
