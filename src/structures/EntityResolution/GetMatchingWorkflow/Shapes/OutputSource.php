<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KMSArn
 * @property bool|null $applyNormalization
 * @property list<OutputAttribute> $output
 * @property string $outputS3Path
 */
class OutputSource extends Shape
{
    /**
     * @param array{
     *     KMSArn?: string|null,
     *     applyNormalization?: bool|null,
     *     output: list<OutputAttribute>,
     *     outputS3Path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
