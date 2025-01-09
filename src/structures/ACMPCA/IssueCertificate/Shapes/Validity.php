<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Value
 * @property 'END_DATE'|'ABSOLUTE'|'DAYS'|'MONTHS'|'YEARS' $Type
 */
class Validity extends Shape
{
    /**
     * @param array{
     *     Value: int,
     *     Type: 'END_DATE'|'ABSOLUTE'|'DAYS'|'MONTHS'|'YEARS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
