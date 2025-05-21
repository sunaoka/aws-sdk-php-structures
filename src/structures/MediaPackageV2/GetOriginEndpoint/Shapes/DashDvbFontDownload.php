<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Url
 * @property string|null $MimeType
 * @property string|null $FontFamily
 */
class DashDvbFontDownload extends Shape
{
    /**
     * @param array{
     *     Url?: string|null,
     *     MimeType?: string|null,
     *     FontFamily?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
