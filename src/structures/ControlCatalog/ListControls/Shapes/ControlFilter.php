<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImplementationFilter|null $Implementations
 * @property list<string>|null $GovernedProviders
 */
class ControlFilter extends Shape
{
    /**
     * @param array{
     *     Implementations?: ImplementationFilter|null,
     *     GovernedProviders?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
