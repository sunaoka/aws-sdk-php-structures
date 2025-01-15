<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AdMarkerPassthrough|null $AdMarkerPassthrough
 */
class ManifestProcessingRules extends Shape
{
    /**
     * @param array{AdMarkerPassthrough?: AdMarkerPassthrough|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
