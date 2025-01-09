<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $ResourcesSucceeded
 * @property int<0, max> $ResourcesFailed
 * @property int<0, max> $ResourcesProcessing
 * @property int<0, max> $ResourcesPending
 */
class TemplateProgress extends Shape
{
    /**
     * @param array{
     *     ResourcesSucceeded?: int<0, max>,
     *     ResourcesFailed?: int<0, max>,
     *     ResourcesProcessing?: int<0, max>,
     *     ResourcesPending?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
