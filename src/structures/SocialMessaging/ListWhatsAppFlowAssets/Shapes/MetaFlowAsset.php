<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListWhatsAppFlowAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $assetType
 * @property string $downloadUrl
 */
class MetaFlowAsset extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     assetType: string,
     *     downloadUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
