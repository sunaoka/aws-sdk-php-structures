<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AudioRenditionSets
 * @property M3u8Settings $M3u8Settings
 */
class StandardHlsSettings extends Shape
{
    /**
     * @param array{
     *     AudioRenditionSets?: string|null,
     *     M3u8Settings: M3u8Settings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
