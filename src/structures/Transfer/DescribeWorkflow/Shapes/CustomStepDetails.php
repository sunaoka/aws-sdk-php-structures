<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Target
 * @property int<1, 1800> $TimeoutSeconds
 * @property string $SourceFileLocation
 */
class CustomStepDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Target?: string,
     *     TimeoutSeconds?: int<1, 1800>,
     *     SourceFileLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
