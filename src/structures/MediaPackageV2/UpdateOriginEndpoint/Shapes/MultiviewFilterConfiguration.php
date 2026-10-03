<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LAYOUT_2EH'|'LAYOUT_2PL'|'LAYOUT_3EL'|'LAYOUT_3PL'|'LAYOUT_4E'|'LAYOUT_4PL' $Layout
 * @property list<string> $Sources
 */
class MultiviewFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     Layout: 'LAYOUT_2EH'|'LAYOUT_2PL'|'LAYOUT_3EL'|'LAYOUT_3PL'|'LAYOUT_4E'|'LAYOUT_4PL',
     *     Sources: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
