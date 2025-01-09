<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticKeySettings $StaticKeySettings
 */
class KeyProviderSettings extends Shape
{
    /**
     * @param array{StaticKeySettings?: StaticKeySettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
