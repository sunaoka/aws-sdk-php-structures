<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AudioRenditionSets
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $NielsenId3Behavior
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $TimedMetadataBehavior
 */
class Fmp4HlsSettings extends Shape
{
    /**
     * @param array{
     *     AudioRenditionSets?: string|null,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     TimedMetadataBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
