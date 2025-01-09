<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GroupResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property string $ErrorMessage
 * @property string $ErrorCode
 */
class FailedResource extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     ErrorMessage?: string,
     *     ErrorCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
