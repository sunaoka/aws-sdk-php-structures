<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListNetworkConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Id
 * @property 'VPC_EGRESS' $Type
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED'|null $State
 * @property \Aws\Api\DateTimeResult|null $LastModified
 */
class NetworkConnectorSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     Id: string,
     *     Type: 'VPC_EGRESS',
     *     State?: 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED'|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
