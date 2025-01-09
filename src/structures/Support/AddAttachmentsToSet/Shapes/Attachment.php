<?php

namespace Sunaoka\Aws\Structures\Support\AddAttachmentsToSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileName
 * @property string $data
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     fileName?: string,
     *     data?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
