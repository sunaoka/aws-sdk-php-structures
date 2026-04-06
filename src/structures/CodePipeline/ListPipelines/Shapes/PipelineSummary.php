<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property int<1, max>|null $version
 * @property \Aws\Api\DateTimeResult|null $created
 * @property \Aws\Api\DateTimeResult|null $updated
 */
class PipelineSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     version?: int<1, max>|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     updated?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
