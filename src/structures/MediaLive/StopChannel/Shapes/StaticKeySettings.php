<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputLocation|null $KeyProviderServer
 * @property string $StaticKeyValue
 */
class StaticKeySettings extends Shape
{
    /**
     * @param array{
     *     KeyProviderServer?: InputLocation|null,
     *     StaticKeyValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
