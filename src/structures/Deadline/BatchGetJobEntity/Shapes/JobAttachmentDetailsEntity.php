<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property Attachments $attachments
 */
class JobAttachmentDetailsEntity extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     attachments: Attachments
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
