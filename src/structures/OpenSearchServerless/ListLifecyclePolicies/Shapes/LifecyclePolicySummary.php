<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListLifecyclePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $createdDate
 * @property string $description
 * @property int $lastModifiedDate
 * @property string $name
 * @property string $policyVersion
 * @property 'retention' $type
 */
class LifecyclePolicySummary extends Shape
{
    /**
     * @param array{
     *     createdDate?: int,
     *     description?: string,
     *     lastModifiedDate?: int,
     *     name?: string,
     *     policyVersion?: string,
     *     type?: 'retention'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
