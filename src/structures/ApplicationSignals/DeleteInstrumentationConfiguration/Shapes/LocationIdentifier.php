<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\DeleteInstrumentationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeLocation|null $CodeLocation
 * @property string|null $LocationHash
 */
class LocationIdentifier extends Shape
{
    /**
     * @param array{
     *     CodeLocation?: CodeLocation|null,
     *     LocationHash?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
