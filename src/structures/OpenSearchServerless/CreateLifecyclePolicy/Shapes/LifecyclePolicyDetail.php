<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'retention'|null $type
 * @property string|null $name
 * @property string|null $policyVersion
 * @property string|null $description
 * @property Document|null $policy
 * @property int|null $createdDate
 * @property int|null $lastModifiedDate
 */
class LifecyclePolicyDetail extends Shape
{
    /**
     * @param array{
     *     type?: 'retention'|null,
     *     name?: string|null,
     *     policyVersion?: string|null,
     *     description?: string|null,
     *     policy?: Document|null,
     *     createdDate?: int|null,
     *     lastModifiedDate?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
