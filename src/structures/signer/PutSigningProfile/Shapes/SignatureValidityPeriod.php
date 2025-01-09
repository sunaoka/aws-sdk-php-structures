<?php

namespace Sunaoka\Aws\Structures\signer\PutSigningProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $value
 * @property 'DAYS'|'MONTHS'|'YEARS' $type
 */
class SignatureValidityPeriod extends Shape
{
    /**
     * @param array{
     *     value?: int,
     *     type?: 'DAYS'|'MONTHS'|'YEARS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
