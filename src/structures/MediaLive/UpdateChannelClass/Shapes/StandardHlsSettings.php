<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AudioRenditionSets
 * @property M3u8Settings $M3u8Settings
 */
class StandardHlsSettings extends Shape
{
    /**
     * @param array{
     *     AudioRenditionSets?: string,
     *     M3u8Settings: M3u8Settings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
