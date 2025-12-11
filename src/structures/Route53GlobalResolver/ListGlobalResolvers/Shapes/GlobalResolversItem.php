<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListGlobalResolvers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $clientToken
 * @property string $dnsName
 * @property string|null $observabilityRegion
 * @property string $name
 * @property string|null $description
 * @property list<string> $regions
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property list<string> $ipv4Addresses
 */
class GlobalResolversItem extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     clientToken: string,
     *     dnsName: string,
     *     observabilityRegion?: string|null,
     *     name: string,
     *     description?: string|null,
     *     regions: list<string>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING',
     *     ipv4Addresses: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
