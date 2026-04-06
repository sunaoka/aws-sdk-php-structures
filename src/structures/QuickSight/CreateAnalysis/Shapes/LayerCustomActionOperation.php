<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomActionFilterOperation|null $FilterOperation
 * @property CustomActionNavigationOperation|null $NavigationOperation
 * @property CustomActionURLOperation|null $URLOperation
 * @property CustomActionSetParametersOperation|null $SetParametersOperation
 */
class LayerCustomActionOperation extends Shape
{
    /**
     * @param array{
     *     FilterOperation?: CustomActionFilterOperation|null,
     *     NavigationOperation?: CustomActionNavigationOperation|null,
     *     URLOperation?: CustomActionURLOperation|null,
     *     SetParametersOperation?: CustomActionSetParametersOperation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
