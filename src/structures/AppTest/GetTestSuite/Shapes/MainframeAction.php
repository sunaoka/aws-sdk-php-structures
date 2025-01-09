<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property MainframeActionType $actionType
 * @property MainframeActionProperties $properties
 */
class MainframeAction extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     actionType: MainframeActionType,
     *     properties?: MainframeActionProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
