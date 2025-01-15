<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCommunications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $attachmentId
 * @property string|null $fileName
 */
class AttachmentDetails extends Shape
{
    /**
     * @param array{
     *     attachmentId?: string|null,
     *     fileName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
