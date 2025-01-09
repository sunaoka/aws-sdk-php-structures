<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AudioRenditionSets
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $NielsenId3Behavior
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $TimedMetadataBehavior
 */
class Fmp4HlsSettings extends Shape
{
    /**
     * @param array{
     *     AudioRenditionSets?: string,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     TimedMetadataBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
