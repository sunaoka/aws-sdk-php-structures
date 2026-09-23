<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateScopeSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceCriteria|null $criteria
 * @property list<ResourceLogicalExpression>|null $and
 * @property list<ResourceLogicalExpression>|null $or
 * @property ResourceLogicalExpression|null $not
 */
class ResourceLogicalExpression extends Shape
{
    /**
     * @param array{
     *     criteria?: ResourceCriteria|null,
     *     and?: list<ResourceLogicalExpression>|null,
     *     or?: list<ResourceLogicalExpression>|null,
     *     not?: ResourceLogicalExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
