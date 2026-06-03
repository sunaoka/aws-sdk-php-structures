<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppFlowPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $previewUrl
 * @property string $expiresAt
 */
class MetaFlowPreviewInfo extends Shape
{
    /**
     * @param array{
     *     previewUrl: string,
     *     expiresAt: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
