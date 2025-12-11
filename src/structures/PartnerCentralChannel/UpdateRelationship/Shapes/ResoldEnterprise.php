<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\UpdateRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENTIRE_ORGANIZATION'|'MANAGEMENT_ACCOUNT_ONLY' $coverage
 * @property string $tamLocation
 * @property string|null $chargeAccountId
 */
class ResoldEnterprise extends Shape
{
    /**
     * @param array{
     *     coverage: 'ENTIRE_ORGANIZATION'|'MANAGEMENT_ACCOUNT_ONLY',
     *     tamLocation: string,
     *     chargeAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
