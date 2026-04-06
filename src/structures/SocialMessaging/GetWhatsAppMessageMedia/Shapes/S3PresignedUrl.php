<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppMessageMedia\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property array<string, string> $headers
 */
class S3PresignedUrl extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     headers: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
