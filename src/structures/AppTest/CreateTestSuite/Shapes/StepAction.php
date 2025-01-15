<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceAction|null $resourceAction
 * @property MainframeAction|null $mainframeAction
 * @property CompareAction|null $compareAction
 */
class StepAction extends Shape
{
    /**
     * @param array{
     *     resourceAction?: ResourceAction|null,
     *     mainframeAction?: MainframeAction|null,
     *     compareAction?: CompareAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
