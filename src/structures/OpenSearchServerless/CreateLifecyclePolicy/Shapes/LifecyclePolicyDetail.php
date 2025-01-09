<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $createdDate
 * @property string $description
 * @property int $lastModifiedDate
 * @property string $name
 * @property Document $policy
 * @property string $policyVersion
 * @property 'retention' $type
 */
class LifecyclePolicyDetail extends Shape
{
    /**
     * @param array{
     *     createdDate?: int,
     *     description?: string,
     *     lastModifiedDate?: int,
     *     name?: string,
     *     policy?: Document,
     *     policyVersion?: string,
     *     type?: 'retention'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
