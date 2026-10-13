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
 * @property string|null $LatestVersionArn
 * @property int<1, max>|null $LatestVersion
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
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     LatestVersionArn?: string|null,
     *     LatestVersion?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
