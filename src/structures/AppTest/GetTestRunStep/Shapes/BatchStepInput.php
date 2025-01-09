<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MainframeResourceSummary $resource
 * @property string $batchJobName
 * @property array<string, string> $batchJobParameters
 * @property list<string> $exportDataSetNames
 * @property MainframeActionProperties $properties
 */
class BatchStepInput extends Shape
{
    /**
     * @param array{
     *     resource: MainframeResourceSummary,
     *     batchJobName: string,
     *     batchJobParameters?: array<string, string>,
     *     exportDataSetNames?: list<string>,
     *     properties?: MainframeActionProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
