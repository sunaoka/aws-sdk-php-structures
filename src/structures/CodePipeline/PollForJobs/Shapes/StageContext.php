<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 */
class StageContext extends Shape
{
    /**
     * @param array{name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
