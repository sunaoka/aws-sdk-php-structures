<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListFirewallDomainLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $globalResolverId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property string $id
 * @property string $name
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class FirewallDomainListsItem extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     globalResolverId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     id: string,
     *     name: string,
     *     status: 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
