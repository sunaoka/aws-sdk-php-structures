<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchDeleteFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientToken
 * @property string $id
 * @property string|null $name
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING'|null $status
 */
class BatchDeleteFirewallRuleResult extends Shape
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     id: string,
     *     name?: string|null,
     *     status?: 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
