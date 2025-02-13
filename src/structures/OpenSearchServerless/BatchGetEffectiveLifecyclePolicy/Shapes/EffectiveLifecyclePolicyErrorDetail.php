<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetEffectiveLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'retention'|null $type
 * @property string|null $resource
 * @property string|null $errorMessage
 * @property string|null $errorCode
 */
class EffectiveLifecyclePolicyErrorDetail extends Shape
{
    /**
     * @param array{
     *     type?: 'retention'|null,
     *     resource?: string|null,
     *     errorMessage?: string|null,
     *     errorCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
