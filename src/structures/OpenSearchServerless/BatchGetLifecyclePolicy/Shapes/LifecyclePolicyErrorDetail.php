<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'retention'|null $type
 * @property string|null $name
 * @property string|null $errorMessage
 * @property string|null $errorCode
 */
class LifecyclePolicyErrorDetail extends Shape
{
    /**
     * @param array{
     *     type?: 'retention'|null,
     *     name?: string|null,
     *     errorMessage?: string|null,
     *     errorCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
