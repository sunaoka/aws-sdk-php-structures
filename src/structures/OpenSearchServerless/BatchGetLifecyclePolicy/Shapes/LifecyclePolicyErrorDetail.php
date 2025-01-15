<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorCode
 * @property string|null $errorMessage
 * @property string|null $name
 * @property 'retention'|null $type
 */
class LifecyclePolicyErrorDetail extends Shape
{
    /**
     * @param array{
     *     errorCode?: string|null,
     *     errorMessage?: string|null,
     *     name?: string|null,
     *     type?: 'retention'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
