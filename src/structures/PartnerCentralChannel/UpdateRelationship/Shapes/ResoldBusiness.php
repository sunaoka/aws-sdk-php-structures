<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\UpdateRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENTIRE_ORGANIZATION'|'MANAGEMENT_ACCOUNT_ONLY' $coverage
 */
class ResoldBusiness extends Shape
{
    /**
     * @param array{coverage: 'ENTIRE_ORGANIZATION'|'MANAGEMENT_ACCOUNT_ONLY'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
