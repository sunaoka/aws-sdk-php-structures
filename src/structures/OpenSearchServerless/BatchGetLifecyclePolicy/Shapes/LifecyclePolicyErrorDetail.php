<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorCode
 * @property string $errorMessage
 * @property string $name
 * @property 'retention' $type
 */
class LifecyclePolicyErrorDetail extends Shape
{
    /**
     * @param array{
     *     errorCode?: string,
     *     errorMessage?: string,
     *     name?: string,
     *     type?: 'retention'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
