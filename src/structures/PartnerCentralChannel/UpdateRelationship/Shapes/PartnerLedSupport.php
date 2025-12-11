<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\UpdateRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENTIRE_ORGANIZATION'|'MANAGEMENT_ACCOUNT_ONLY' $coverage
 * @property 'DISTRIBUTOR'|'DISTRIBUTION_SELLER'|null $provider
 * @property string $tamLocation
 */
class PartnerLedSupport extends Shape
{
    /**
     * @param array{
     *     coverage: 'ENTIRE_ORGANIZATION'|'MANAGEMENT_ACCOUNT_ONLY',
     *     provider?: 'DISTRIBUTOR'|'DISTRIBUTION_SELLER'|null,
     *     tamLocation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
