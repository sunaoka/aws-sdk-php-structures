<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListDNSViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $clientToken
 * @property 'ENABLED'|'DISABLED' $dnssecValidation
 * @property 'ENABLED'|'DISABLED' $ednsClientSubnet
 * @property 'ENABLED'|'DISABLED' $firewallRulesFailOpen
 * @property string $name
 * @property string|null $description
 * @property string $globalResolverId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'ENABLING'|'DISABLING'|'DISABLED'|'DELETING' $status
 */
class DNSViewSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     clientToken: string,
     *     dnssecValidation: 'ENABLED'|'DISABLED',
     *     ednsClientSubnet: 'ENABLED'|'DISABLED',
     *     firewallRulesFailOpen: 'ENABLED'|'DISABLED',
     *     name: string,
     *     description?: string|null,
     *     globalResolverId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'OPERATIONAL'|'UPDATING'|'ENABLING'|'DISABLING'|'DISABLED'|'DELETING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
