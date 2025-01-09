<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $createdDate
 * @property string $description
 * @property int $lastModifiedDate
 * @property string $name
 * @property string $policyVersion
 * @property 'encryption'|'network' $type
 */
class SecurityPolicySummary extends Shape
{
    /**
     * @param array{
     *     createdDate?: int,
     *     description?: string,
     *     lastModifiedDate?: int,
     *     name?: string,
     *     policyVersion?: string,
     *     type?: 'encryption'|'network'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
