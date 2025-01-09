<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ResourcesSucceeded
 * @property int $ResourcesFailed
 * @property int $ResourcesProcessing
 * @property int $ResourcesPending
 */
class TemplateProgress extends Shape
{
    /**
     * @param array{
     *     ResourcesSucceeded?: int,
     *     ResourcesFailed?: int,
     *     ResourcesProcessing?: int,
     *     ResourcesPending?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
