<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\GetChannelContract\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $catalog
 * @property 'MANAGED_SERVICES_ATTESTATION' $contractType
 * @property 'PENDING'|'ACCEPTED'|'EXPIRED'|'CANCELED'|'INACTIVE' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult|null $respondedAt
 * @property string|null $cancellationReason
 * @property ChannelContractDetails $details
 */
class ChannelContractDetail extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     catalog: string,
     *     contractType: 'MANAGED_SERVICES_ATTESTATION',
     *     status: 'PENDING'|'ACCEPTED'|'EXPIRED'|'CANCELED'|'INACTIVE',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     respondedAt?: \Aws\Api\DateTimeResult|null,
     *     cancellationReason?: string|null,
     *     details: ChannelContractDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
