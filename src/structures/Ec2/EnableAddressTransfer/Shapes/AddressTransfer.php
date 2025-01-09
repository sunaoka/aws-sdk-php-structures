<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableAddressTransfer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PublicIp
 * @property string $AllocationId
 * @property string $TransferAccountId
 * @property \Aws\Api\DateTimeResult $TransferOfferExpirationTimestamp
 * @property \Aws\Api\DateTimeResult $TransferOfferAcceptedTimestamp
 * @property 'pending'|'disabled'|'accepted' $AddressTransferStatus
 */
class AddressTransfer extends Shape
{
    /**
     * @param array{
     *     PublicIp?: string,
     *     AllocationId?: string,
     *     TransferAccountId?: string,
     *     TransferOfferExpirationTimestamp?: \Aws\Api\DateTimeResult,
     *     TransferOfferAcceptedTimestamp?: \Aws\Api\DateTimeResult,
     *     AddressTransferStatus?: 'pending'|'disabled'|'accepted'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
