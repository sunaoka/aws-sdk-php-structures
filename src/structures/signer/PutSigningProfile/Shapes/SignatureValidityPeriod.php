<?php

namespace Sunaoka\Aws\Structures\signer\PutSigningProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $value
 * @property 'DAYS'|'MONTHS'|'YEARS'|null $type
 */
class SignatureValidityPeriod extends Shape
{
    /**
     * @param array{
     *     value?: int|null,
     *     type?: 'DAYS'|'MONTHS'|'YEARS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
