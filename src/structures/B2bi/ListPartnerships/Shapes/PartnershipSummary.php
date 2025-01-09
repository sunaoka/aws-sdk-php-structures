<?php

namespace Sunaoka\Aws\Structures\B2bi\ListPartnerships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $profileId
 * @property string $partnershipId
 * @property string $name
 * @property list<string> $capabilities
 * @property CapabilityOptions $capabilityOptions
 * @property string $tradingPartnerId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 */
class PartnershipSummary extends Shape
{
    /**
     * @param array{
     *     profileId: string,
     *     partnershipId: string,
     *     name?: string,
     *     capabilities?: list<string>,
     *     capabilityOptions?: CapabilityOptions,
     *     tradingPartnerId?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
