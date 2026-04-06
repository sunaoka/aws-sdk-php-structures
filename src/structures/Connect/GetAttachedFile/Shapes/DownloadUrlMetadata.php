<?php

namespace Sunaoka\Aws\Structures\Connect\GetAttachedFile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Url
 * @property string|null $UrlExpiry
 */
class DownloadUrlMetadata extends Shape
{
    /**
     * @param array{
     *     Url?: string|null,
     *     UrlExpiry?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
