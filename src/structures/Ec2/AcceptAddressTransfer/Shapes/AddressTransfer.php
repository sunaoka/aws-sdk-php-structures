<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptAddressTransfer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PublicIp
 * @property string|null $AllocationId
 * @property string|null $TransferAccountId
 * @property \Aws\Api\DateTimeResult|null $TransferOfferExpirationTimestamp
 * @property \Aws\Api\DateTimeResult|null $TransferOfferAcceptedTimestamp
 * @property 'pending'|'disabled'|'accepted'|null $AddressTransferStatus
 */
class AddressTransfer extends Shape
{
    /**
     * @param array{
     *     PublicIp?: string|null,
     *     AllocationId?: string|null,
     *     TransferAccountId?: string|null,
     *     TransferOfferExpirationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     TransferOfferAcceptedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     AddressTransferStatus?: 'pending'|'disabled'|'accepted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
