<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taxRegime
 * @property string|null $taxRegimeFullName
 * @property string|null $cfdiUsageCode
 */
class MexicoAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     taxRegime?: string|null,
     *     taxRegimeFullName?: string|null,
     *     cfdiUsageCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
