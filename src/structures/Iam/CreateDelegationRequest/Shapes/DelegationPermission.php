<?php

namespace Sunaoka\Aws\Structures\Iam\CreateDelegationRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyTemplateArn
 * @property list<PolicyParameter>|null $Parameters
 */
class DelegationPermission extends Shape
{
    /**
     * @param array{
     *     PolicyTemplateArn?: string|null,
     *     Parameters?: list<PolicyParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
