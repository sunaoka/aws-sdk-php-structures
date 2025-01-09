<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputLocation $KeyProviderServer
 * @property string $StaticKeyValue
 */
class StaticKeySettings extends Shape
{
    /**
     * @param array{
     *     KeyProviderServer?: InputLocation,
     *     StaticKeyValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
