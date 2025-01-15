<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensVersionDifference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PillarDifference>|null $PillarDifferences
 */
class VersionDifferences extends Shape
{
    /**
     * @param array{PillarDifferences?: list<PillarDifference>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
