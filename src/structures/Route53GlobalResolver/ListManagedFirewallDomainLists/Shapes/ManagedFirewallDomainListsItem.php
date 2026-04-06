<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListManagedFirewallDomainLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string $id
 * @property string $name
 * @property string $managedListType
 */
class ManagedFirewallDomainListsItem extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     id: string,
     *     name: string,
     *     managedListType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
