<?php

namespace Sunaoka\Aws\Structures\IVS\GetRecordingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'NONE'|'CUSTOM'|null $renditionSelection
 * @property list<'FULL_HD'|'HD'|'SD'|'LOWEST_RESOLUTION'>|null $renditions
 */
class RenditionConfiguration extends Shape
{
    /**
     * @param array{
     *     renditionSelection?: 'ALL'|'NONE'|'CUSTOM'|null,
     *     renditions?: list<'FULL_HD'|'HD'|'SD'|'LOWEST_RESOLUTION'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
