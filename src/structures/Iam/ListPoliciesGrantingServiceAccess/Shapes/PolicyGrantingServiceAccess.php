<?php

namespace Sunaoka\Aws\Structures\Iam\ListPoliciesGrantingServiceAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property 'INLINE'|'MANAGED' $PolicyType
 * @property string $PolicyArn
 * @property 'USER'|'ROLE'|'GROUP' $EntityType
 * @property string $EntityName
 */
class PolicyGrantingServiceAccess extends Shape
{
    /**
     * @param array{
     *     PolicyName: string,
     *     PolicyType: 'INLINE'|'MANAGED',
     *     PolicyArn?: string,
     *     EntityType?: 'USER'|'ROLE'|'GROUP',
     *     EntityName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
