<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PollForTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $document
 * @property string|null $signature
 */
class InstanceIdentity extends Shape
{
    /**
     * @param array{
     *     document?: string|null,
     *     signature?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
