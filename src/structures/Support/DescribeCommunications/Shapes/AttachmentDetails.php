<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCommunications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attachmentId
 * @property string $fileName
 */
class AttachmentDetails extends Shape
{
    /**
     * @param array{
     *     attachmentId?: string,
     *     fileName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
