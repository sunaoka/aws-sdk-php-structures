<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PollForTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $document
 * @property string $signature
 */
class InstanceIdentity extends Shape
{
    /**
     * @param array{
     *     document?: string,
     *     signature?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
