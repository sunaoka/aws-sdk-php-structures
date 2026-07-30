<?php

namespace Sunaoka\Aws\Structures\Iam\SimulatePrincipalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'inline'|'aws-managed'|'user-managed'|'permission-boundary'|'scp'|'rcp'|null $PolicyType
 * @property string|null $PolicyArn
 * @property InlinePolicyIdentifierType|null $InlinePolicyIdentifier
 */
class PolicyIdentifier extends Shape
{
    /**
     * @param array{
     *     PolicyType?: 'inline'|'aws-managed'|'user-managed'|'permission-boundary'|'scp'|'rcp'|null,
     *     PolicyArn?: string|null,
     *     InlinePolicyIdentifier?: InlinePolicyIdentifierType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
