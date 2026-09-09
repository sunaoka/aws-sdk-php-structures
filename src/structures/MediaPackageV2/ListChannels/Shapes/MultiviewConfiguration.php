<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AvailableSources
 * @property list<'LAYOUT_2EH'|'LAYOUT_2PL'|'LAYOUT_3EL'|'LAYOUT_3PL'|'LAYOUT_4E'|'LAYOUT_4PL'> $AvailableLayouts
 */
class MultiviewConfiguration extends Shape
{
    /**
     * @param array{
     *     AvailableSources: list<string>,
     *     AvailableLayouts: list<'LAYOUT_2EH'|'LAYOUT_2PL'|'LAYOUT_3EL'|'LAYOUT_3PL'|'LAYOUT_4E'|'LAYOUT_4PL'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
