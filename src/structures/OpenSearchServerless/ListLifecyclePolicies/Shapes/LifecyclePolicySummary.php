<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListLifecyclePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'retention'|null $type
 * @property string|null $name
 * @property string|null $policyVersion
 * @property string|null $description
 * @property int|null $createdDate
 * @property int|null $lastModifiedDate
 */
class LifecyclePolicySummary extends Shape
{
    /**
     * @param array{
     *     type?: 'retention'|null,
     *     name?: string|null,
     *     policyVersion?: string|null,
     *     description?: string|null,
     *     createdDate?: int|null,
     *     lastModifiedDate?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
