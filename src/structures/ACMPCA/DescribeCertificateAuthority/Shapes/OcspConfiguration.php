<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DescribeCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $OcspCustomCname
 */
class OcspConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     OcspCustomCname?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
