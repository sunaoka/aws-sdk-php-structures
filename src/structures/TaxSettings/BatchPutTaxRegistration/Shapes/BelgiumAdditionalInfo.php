<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $peppolId
 * @property bool|null $isMercuriusBoxEnabled
 */
class BelgiumAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     peppolId?: string|null,
     *     isMercuriusBoxEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
