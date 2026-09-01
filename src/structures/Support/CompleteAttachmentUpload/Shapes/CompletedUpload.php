<?php

namespace Sunaoka\Aws\Structures\Support\CompleteAttachmentUpload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $partIndex
 * @property string $eTag
 */
class CompletedUpload extends Shape
{
    /**
     * @param array{
     *     partIndex: int,
     *     eTag: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
