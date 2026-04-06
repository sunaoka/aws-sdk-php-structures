<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStudioComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $activeDirectoryUser
 * @property string|null $endpoint
 */
class ComputeFarmConfiguration extends Shape
{
    /**
     * @param array{
     *     activeDirectoryUser?: string|null,
     *     endpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
