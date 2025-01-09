<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $batchJobName
 * @property array<string, string> $batchJobParameters
 * @property list<string> $exportDataSetNames
 */
class Batch extends Shape
{
    /**
     * @param array{
     *     batchJobName: string,
     *     batchJobParameters?: array<string, string>,
     *     exportDataSetNames?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
