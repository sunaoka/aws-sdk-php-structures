<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticKeySettings|null $StaticKeySettings
 */
class KeyProviderSettings extends Shape
{
    /**
     * @param array{StaticKeySettings?: StaticKeySettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
