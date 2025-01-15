<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MainframeResourceSummary $resource
 * @property string $batchJobName
 * @property array<string, string>|null $batchJobParameters
 * @property list<string>|null $exportDataSetNames
 * @property MainframeActionProperties|null $properties
 */
class BatchStepInput extends Shape
{
    /**
     * @param array{
     *     resource: MainframeResourceSummary,
     *     batchJobName: string,
     *     batchJobParameters?: array<string, string>|null,
     *     exportDataSetNames?: list<string>|null,
     *     properties?: MainframeActionProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
