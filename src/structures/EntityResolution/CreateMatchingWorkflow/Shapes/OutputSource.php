<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $outputS3Path
 * @property string|null $KMSArn
 * @property list<OutputAttribute> $output
 * @property bool|null $applyNormalization
 */
class OutputSource extends Shape
{
    /**
     * @param array{
     *     outputS3Path: string,
     *     KMSArn?: string|null,
     *     output: list<OutputAttribute>,
     *     applyNormalization?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
