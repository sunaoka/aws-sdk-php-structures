<?php

namespace Sunaoka\Aws\Structures\B2bi\ListPartnerships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $profileId
 * @property string $partnershipId
 * @property string|null $name
 * @property list<string>|null $capabilities
 * @property CapabilityOptions|null $capabilityOptions
 * @property string|null $tradingPartnerId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 */
class PartnershipSummary extends Shape
{
    /**
     * @param array{
     *     profileId: string,
     *     partnershipId: string,
     *     name?: string|null,
     *     capabilities?: list<string>|null,
     *     capabilityOptions?: CapabilityOptions|null,
     *     tradingPartnerId?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
