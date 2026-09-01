<?php

namespace Sunaoka\Aws\Structures\Support\GetAttachmentUploadLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $startIndex
 * @property int<2, max>|null $endIndex
 */
class UploadRange extends Shape
{
    /**
     * @param array{
     *     startIndex: int<1, max>,
     *     endIndex?: int<2, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
