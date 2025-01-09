<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomActionNavigationOperation $NavigationOperation
 * @property CustomActionURLOperation $URLOperation
 * @property CustomActionSetParametersOperation $SetParametersOperation
 */
class ImageCustomActionOperation extends Shape
{
    /**
     * @param array{
     *     NavigationOperation?: CustomActionNavigationOperation,
     *     URLOperation?: CustomActionURLOperation,
     *     SetParametersOperation?: CustomActionSetParametersOperation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
