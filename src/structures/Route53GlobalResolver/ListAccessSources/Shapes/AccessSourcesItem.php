<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListAccessSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $cidr
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property 'IPV4'|'IPV6' $ipAddressType
 * @property string|null $name
 * @property string $dnsViewId
 * @property 'DO53'|'DOH'|'DOT' $protocol
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AccessSourcesItem extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     cidr: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     id: string,
     *     ipAddressType: 'IPV4'|'IPV6',
     *     name?: string|null,
     *     dnsViewId: string,
     *     protocol: 'DO53'|'DOH'|'DOT',
     *     status: 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
