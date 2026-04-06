<?php

namespace Sunaoka\Aws\Structures\Connect\StartAttachedFileUpload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Url
 * @property string|null $UrlExpiry
 * @property array<string, string>|null $HeadersToInclude
 */
class UploadUrlMetadata extends Shape
{
    /**
     * @param array{
     *     Url?: string|null,
     *     UrlExpiry?: string|null,
     *     HeadersToInclude?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
