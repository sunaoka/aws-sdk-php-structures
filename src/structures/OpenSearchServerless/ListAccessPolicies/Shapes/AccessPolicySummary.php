<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $createdDate
 * @property string|null $description
 * @property int|null $lastModifiedDate
 * @property string|null $name
 * @property string|null $policyVersion
 * @property 'data'|null $type
 */
class AccessPolicySummary extends Shape
{
    /**
     * @param array{
     *     createdDate?: int|null,
     *     description?: string|null,
     *     lastModifiedDate?: int|null,
     *     name?: string|null,
     *     policyVersion?: string|null,
     *     type?: 'data'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
