<?php

namespace Sunaoka\Aws\Structures\Support\GetAttachmentDownloadLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property string $expiryDate
 */
class DownloadUrl extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     expiryDate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
