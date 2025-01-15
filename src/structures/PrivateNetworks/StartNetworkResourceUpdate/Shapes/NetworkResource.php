<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\StartNetworkResourceUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NameValuePair>|null $attributes
 * @property CommitmentInformation|null $commitmentInformation
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property 'INITIAL'|'HEALTHY'|'UNHEALTHY'|null $health
 * @property string|null $model
 * @property string|null $networkArn
 * @property string|null $networkResourceArn
 * @property string|null $networkSiteArn
 * @property string|null $orderArn
 * @property Position|null $position
 * @property ReturnInformation|null $returnInformation
 * @property string|null $serialNumber
 * @property 'PENDING'|'SHIPPED'|'PROVISIONING'|'PROVISIONED'|'AVAILABLE'|'DELETING'|'PENDING_RETURN'|'DELETED'|'CREATING_SHIPPING_LABEL'|null $status
 * @property string|null $statusReason
 * @property 'RADIO_UNIT'|null $type
 * @property string|null $vendor
 */
class NetworkResource extends Shape
{
    /**
     * @param array{
     *     attributes?: list<NameValuePair>|null,
     *     commitmentInformation?: CommitmentInformation|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     health?: 'INITIAL'|'HEALTHY'|'UNHEALTHY'|null,
     *     model?: string|null,
     *     networkArn?: string|null,
     *     networkResourceArn?: string|null,
     *     networkSiteArn?: string|null,
     *     orderArn?: string|null,
     *     position?: Position|null,
     *     returnInformation?: ReturnInformation|null,
     *     serialNumber?: string|null,
     *     status?: 'PENDING'|'SHIPPED'|'PROVISIONING'|'PROVISIONED'|'AVAILABLE'|'DELETING'|'PENDING_RETURN'|'DELETED'|'CREATING_SHIPPING_LABEL'|null,
     *     statusReason?: string|null,
     *     type?: 'RADIO_UNIT'|null,
     *     vendor?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
