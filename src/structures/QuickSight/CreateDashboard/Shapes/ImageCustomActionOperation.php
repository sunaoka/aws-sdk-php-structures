<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomActionNavigationOperation|null $NavigationOperation
 * @property CustomActionURLOperation|null $URLOperation
 * @property CustomActionSetParametersOperation|null $SetParametersOperation
 */
class ImageCustomActionOperation extends Shape
{
    /**
     * @param array{
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
