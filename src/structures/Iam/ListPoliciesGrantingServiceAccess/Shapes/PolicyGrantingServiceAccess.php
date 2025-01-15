<?php

namespace Sunaoka\Aws\Structures\Iam\ListPoliciesGrantingServiceAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property 'INLINE'|'MANAGED' $PolicyType
 * @property string|null $PolicyArn
 * @property 'USER'|'ROLE'|'GROUP'|null $EntityType
 * @property string|null $EntityName
 */
class PolicyGrantingServiceAccess extends Shape
{
    /**
     * @param array{
     *     PolicyName: string,
     *     PolicyType: 'INLINE'|'MANAGED',
     *     PolicyArn?: string|null,
     *     EntityType?: 'USER'|'ROLE'|'GROUP'|null,
     *     EntityName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
