<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\StartAttachmentUpload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 * @property string $UrlExpiry
 * @property array<string, string> $HeadersToInclude
 */
class UploadMetadata extends Shape
{
    /**
     * @param array{
     *     Url?: string,
     *     UrlExpiry?: string,
     *     HeadersToInclude?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
