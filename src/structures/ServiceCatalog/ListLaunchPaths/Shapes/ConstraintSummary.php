<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListLaunchPaths\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $Description
 */
class ConstraintSummary extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
