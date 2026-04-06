<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetEffectiveLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorCode
 * @property string|null $errorMessage
 * @property string|null $resource
 * @property 'retention'|null $type
 */
class EffectiveLifecyclePolicyErrorDetail extends Shape
{
    /**
     * @param array{
     *     errorCode?: string|null,
     *     errorMessage?: string|null,
     *     resource?: string|null,
     *     type?: 'retention'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
