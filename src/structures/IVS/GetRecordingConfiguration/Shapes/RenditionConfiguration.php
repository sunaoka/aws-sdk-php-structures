<?php

namespace Sunaoka\Aws\Structures\IVS\GetRecordingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'NONE'|'CUSTOM' $renditionSelection
 * @property list<'SD'|'HD'|'FULL_HD'|'LOWEST_RESOLUTION'> $renditions
 */
class RenditionConfiguration extends Shape
{
    /**
     * @param array{
     *     renditionSelection?: 'ALL'|'NONE'|'CUSTOM',
     *     renditions?: list<'SD'|'HD'|'FULL_HD'|'LOWEST_RESOLUTION'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
