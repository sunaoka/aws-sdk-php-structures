<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Invoice'|'Receipt'|null $documentType
 * @property string|null $businessActivity
 */
class ChileAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     documentType?: 'Invoice'|'Receipt'|null,
     *     businessActivity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
