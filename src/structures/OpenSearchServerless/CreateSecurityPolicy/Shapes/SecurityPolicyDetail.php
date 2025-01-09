<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $createdDate
 * @property string $description
 * @property int $lastModifiedDate
 * @property string $name
 * @property Document $policy
 * @property string $policyVersion
 * @property 'encryption'|'network' $type
 */
class SecurityPolicyDetail extends Shape
{
    /**
     * @param array{
     *     createdDate?: int,
     *     description?: string,
     *     lastModifiedDate?: int,
     *     name?: string,
     *     policy?: Document,
     *     policyVersion?: string,
     *     type?: 'encryption'|'network'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
