<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $batchJobName
 * @property array<string, string>|null $batchJobParameters
 * @property list<string>|null $exportDataSetNames
 */
class Batch extends Shape
{
    /**
     * @param array{
     *     batchJobName: string,
     *     batchJobParameters?: array<string, string>|null,
     *     exportDataSetNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
