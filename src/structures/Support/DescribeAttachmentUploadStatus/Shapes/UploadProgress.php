<?php

namespace Sunaoka\Aws\Structures\Support\DescribeAttachmentUploadStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalParts
 * @property int|null $completedPartsCount
 */
class UploadProgress extends Shape
{
    /**
     * @param array{
     *     totalParts?: int|null,
     *     completedPartsCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
