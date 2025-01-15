<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListLifecyclePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $createdDate
 * @property string|null $description
 * @property int|null $lastModifiedDate
 * @property string|null $name
 * @property string|null $policyVersion
 * @property 'retention'|null $type
 */
class LifecyclePolicySummary extends Shape
{
    /**
     * @param array{
     *     createdDate?: int|null,
     *     description?: string|null,
     *     lastModifiedDate?: int|null,
     *     name?: string|null,
     *     policyVersion?: string|null,
     *     type?: 'retention'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
