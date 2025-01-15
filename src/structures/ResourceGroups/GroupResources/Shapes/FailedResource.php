<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GroupResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $ErrorMessage
 * @property string|null $ErrorCode
 */
class FailedResource extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     ErrorMessage?: string|null,
     *     ErrorCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
