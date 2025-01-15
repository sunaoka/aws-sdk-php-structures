<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property MainframeActionType $actionType
 * @property MainframeActionProperties|null $properties
 */
class MainframeAction extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     actionType: MainframeActionType,
     *     properties?: MainframeActionProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
