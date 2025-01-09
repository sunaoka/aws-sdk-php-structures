<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceAction $resourceAction
 * @property MainframeAction $mainframeAction
 * @property CompareAction $compareAction
 */
class StepAction extends Shape
{
    /**
     * @param array{
     *     resourceAction?: ResourceAction,
     *     mainframeAction?: MainframeAction,
     *     compareAction?: CompareAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
