<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED'|'ALLOWED' $PublicAclAccess
 * @property 'BLOCKED'|'ALLOWED' $PublicPolicyAccess
 * @property 'IGNORED'|'NOT_IGNORED' $PublicAclIgnoreBehavior
 * @property 'RESTRICTED'|'NOT_RESTRICTED' $PublicBucketRestrictBehavior
 */
class PublicAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     PublicAclAccess?: 'BLOCKED'|'ALLOWED',
     *     PublicPolicyAccess?: 'BLOCKED'|'ALLOWED',
     *     PublicAclIgnoreBehavior?: 'IGNORED'|'NOT_IGNORED',
     *     PublicBucketRestrictBehavior?: 'RESTRICTED'|'NOT_RESTRICTED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
