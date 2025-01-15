<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED'|'ALLOWED'|null $PublicAclAccess
 * @property 'BLOCKED'|'ALLOWED'|null $PublicPolicyAccess
 * @property 'IGNORED'|'NOT_IGNORED'|null $PublicAclIgnoreBehavior
 * @property 'RESTRICTED'|'NOT_RESTRICTED'|null $PublicBucketRestrictBehavior
 */
class PublicAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     PublicAclAccess?: 'BLOCKED'|'ALLOWED'|null,
     *     PublicPolicyAccess?: 'BLOCKED'|'ALLOWED'|null,
     *     PublicAclIgnoreBehavior?: 'IGNORED'|'NOT_IGNORED'|null,
     *     PublicBucketRestrictBehavior?: 'RESTRICTED'|'NOT_RESTRICTED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
