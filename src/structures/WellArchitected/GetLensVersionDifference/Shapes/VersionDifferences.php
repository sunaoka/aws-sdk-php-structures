<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensVersionDifference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PillarDifference> $PillarDifferences
 */
class VersionDifferences extends Shape
{
    /**
     * @param array{PillarDifferences?: list<PillarDifference>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
