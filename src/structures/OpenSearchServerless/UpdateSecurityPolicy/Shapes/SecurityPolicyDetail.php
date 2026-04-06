<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'encryption'|'network'|null $type
 * @property string|null $name
 * @property string|null $policyVersion
 * @property string|null $description
 * @property Document|null $policy
 * @property int|null $createdDate
 * @property int|null $lastModifiedDate
 */
class SecurityPolicyDetail extends Shape
{
    /**
     * @param array{
     *     type?: 'encryption'|'network'|null,
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
