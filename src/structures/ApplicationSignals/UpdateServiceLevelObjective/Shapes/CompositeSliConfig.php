<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SelectionConfig $SelectionConfig
 * @property list<CompositeSliComponent>|null $Components
 */
class CompositeSliConfig extends Shape
{
    /**
     * @param array{
     *     SelectionConfig: SelectionConfig,
     *     Components?: list<CompositeSliComponent>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
