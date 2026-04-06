<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $ResourcesSucceeded
 * @property int<0, max>|null $ResourcesFailed
 * @property int<0, max>|null $ResourcesProcessing
 * @property int<0, max>|null $ResourcesPending
 */
class TemplateProgress extends Shape
{
    /**
     * @param array{
     *     ResourcesSucceeded?: int<0, max>|null,
     *     ResourcesFailed?: int<0, max>|null,
     *     ResourcesProcessing?: int<0, max>|null,
     *     ResourcesPending?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
