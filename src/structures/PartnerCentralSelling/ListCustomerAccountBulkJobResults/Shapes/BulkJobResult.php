<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListCustomerAccountBulkJobResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RequestId
 * @property 'SUCCEEDED'|'FAILED' $Status
 * @property string|null $ResourceIdentifier
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class BulkJobResult extends Shape
{
    /**
     * @param array{
     *     RequestId: string,
     *     Status: 'SUCCEEDED'|'FAILED',
     *     ResourceIdentifier?: string|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
