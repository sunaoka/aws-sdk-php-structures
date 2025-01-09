<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KMSArn
 * @property bool $applyNormalization
 * @property list<OutputAttribute> $output
 * @property string $outputS3Path
 */
class OutputSource extends Shape
{
    /**
     * @param array{
     *     KMSArn?: string,
     *     applyNormalization?: bool,
     *     output: list<OutputAttribute>,
     *     outputS3Path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
