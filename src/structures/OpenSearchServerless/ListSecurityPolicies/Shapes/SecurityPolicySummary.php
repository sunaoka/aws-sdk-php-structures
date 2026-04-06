<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $createdDate
 * @property string|null $description
 * @property int|null $lastModifiedDate
 * @property string|null $name
 * @property string|null $policyVersion
 * @property 'encryption'|'network'|null $type
 */
class SecurityPolicySummary extends Shape
{
    /**
     * @param array{
     *     createdDate?: int|null,
     *     description?: string|null,
     *     lastModifiedDate?: int|null,
     *     name?: string|null,
     *     policyVersion?: string|null,
     *     type?: 'encryption'|'network'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
