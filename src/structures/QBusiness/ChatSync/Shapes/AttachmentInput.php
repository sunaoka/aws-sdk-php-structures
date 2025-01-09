<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $data
 * @property string $name
 * @property CopyFromSource $copyFrom
 */
class AttachmentInput extends Shape
{
    /**
     * @param array{
     *     data?: string,
     *     name?: string,
     *     copyFrom?: CopyFromSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
