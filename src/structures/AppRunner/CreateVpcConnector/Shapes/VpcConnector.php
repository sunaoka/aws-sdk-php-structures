<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateVpcConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcConnectorName
 * @property string $VpcConnectorArn
 * @property int $VpcConnectorRevision
 * @property list<string> $Subnets
 * @property list<string> $SecurityGroups
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $DeletedAt
 */
class VpcConnector extends Shape
{
    /**
     * @param array{
     *     VpcConnectorName?: string,
     *     VpcConnectorArn?: string,
     *     VpcConnectorRevision?: int,
     *     Subnets?: list<string>,
     *     SecurityGroups?: list<string>,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DeletedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
