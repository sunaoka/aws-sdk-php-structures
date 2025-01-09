<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $createdDate
 * @property string $description
 * @property int $lastModifiedDate
 * @property string $name
 * @property string $policyVersion
 * @property 'data' $type
 */
class AccessPolicySummary extends Shape
{
    /**
     * @param array{
     *     createdDate?: int,
     *     description?: string,
     *     lastModifiedDate?: int,
     *     name?: string,
     *     policyVersion?: string,
     *     type?: 'data'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
