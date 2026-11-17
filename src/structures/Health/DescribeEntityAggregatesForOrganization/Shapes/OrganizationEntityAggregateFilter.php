<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregatesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>>|null $tags
 */
class OrganizationEntityAggregateFilter extends Shape
{
    /**
     * @param array{tags?: array<string, list<string>>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
