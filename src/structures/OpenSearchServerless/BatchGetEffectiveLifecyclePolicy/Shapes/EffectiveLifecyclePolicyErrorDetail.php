<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetEffectiveLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorCode
 * @property string $errorMessage
 * @property string $resource
 * @property 'retention' $type
 */
class EffectiveLifecyclePolicyErrorDetail extends Shape
{
    /**
     * @param array{
     *     errorCode?: string,
     *     errorMessage?: string,
     *     resource?: string,
     *     type?: 'retention'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
