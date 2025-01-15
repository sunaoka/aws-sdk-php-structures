<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListVpcConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcConnectorName
 * @property string|null $VpcConnectorArn
 * @property int|null $VpcConnectorRevision
 * @property list<string>|null $Subnets
 * @property list<string>|null $SecurityGroups
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $DeletedAt
 */
class VpcConnector extends Shape
{
    /**
     * @param array{
     *     VpcConnectorName?: string|null,
     *     VpcConnectorArn?: string|null,
     *     VpcConnectorRevision?: int|null,
     *     Subnets?: list<string>|null,
     *     SecurityGroups?: list<string>|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DeletedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
