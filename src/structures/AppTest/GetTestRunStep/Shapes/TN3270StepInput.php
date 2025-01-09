<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MainframeResourceSummary $resource
 * @property ScriptSummary $script
 * @property list<string> $exportDataSetNames
 * @property MainframeActionProperties $properties
 */
class TN3270StepInput extends Shape
{
    /**
     * @param array{
     *     resource: MainframeResourceSummary,
     *     script: ScriptSummary,
     *     exportDataSetNames?: list<string>,
     *     properties?: MainframeActionProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
