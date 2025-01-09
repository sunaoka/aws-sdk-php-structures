<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\StartNetworkResourceUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NameValuePair> $attributes
 * @property CommitmentInformation $commitmentInformation
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property 'INITIAL'|'HEALTHY'|'UNHEALTHY' $health
 * @property string $model
 * @property string $networkArn
 * @property string $networkResourceArn
 * @property string $networkSiteArn
 * @property string $orderArn
 * @property Position $position
 * @property ReturnInformation $returnInformation
 * @property string $serialNumber
 * @property 'PENDING'|'SHIPPED'|'PROVISIONING'|'PROVISIONED'|'AVAILABLE'|'DELETING'|'PENDING_RETURN'|'DELETED'|'CREATING_SHIPPING_LABEL' $status
 * @property string $statusReason
 * @property 'RADIO_UNIT' $type
 * @property string $vendor
 */
class NetworkResource extends Shape
{
    /**
     * @param array{
     *     attributes?: list<NameValuePair>,
     *     commitmentInformation?: CommitmentInformation,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     health?: 'INITIAL'|'HEALTHY'|'UNHEALTHY',
     *     model?: string,
     *     networkArn?: string,
     *     networkResourceArn?: string,
     *     networkSiteArn?: string,
     *     orderArn?: string,
     *     position?: Position,
     *     returnInformation?: ReturnInformation,
     *     serialNumber?: string,
     *     status?: 'PENDING'|'SHIPPED'|'PROVISIONING'|'PROVISIONED'|'AVAILABLE'|'DELETING'|'PENDING_RETURN'|'DELETED'|'CREATING_SHIPPING_LABEL',
     *     statusReason?: string,
     *     type?: 'RADIO_UNIT',
     *     vendor?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
