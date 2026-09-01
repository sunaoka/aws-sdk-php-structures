<?php

namespace Sunaoka\Aws\Structures\Support\GetAttachmentUploadLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property int $partIndex
 * @property string $expiryDate
 */
class UploadUrl extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     partIndex: int,
     *     expiryDate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
