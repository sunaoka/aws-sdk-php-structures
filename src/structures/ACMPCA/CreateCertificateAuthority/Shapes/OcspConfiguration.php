<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $OcspCustomCname
 */
class OcspConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     OcspCustomCname?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
