<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListHostedZoneAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $resourceArn
 * @property string $hostedZoneId
 * @property string $hostedZoneName
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'OPERATIONAL'|'DELETING' $status
 */
class HostedZoneAssociationSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     resourceArn: string,
     *     hostedZoneId: string,
     *     hostedZoneName: string,
     *     name: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'OPERATIONAL'|'DELETING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
