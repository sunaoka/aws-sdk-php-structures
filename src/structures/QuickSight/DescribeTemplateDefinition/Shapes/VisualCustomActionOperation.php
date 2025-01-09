<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomActionFilterOperation $FilterOperation
 * @property CustomActionNavigationOperation $NavigationOperation
 * @property CustomActionURLOperation $URLOperation
 * @property CustomActionSetParametersOperation $SetParametersOperation
 */
class VisualCustomActionOperation extends Shape
{
    /**
     * @param array{
     *     FilterOperation?: CustomActionFilterOperation,
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
