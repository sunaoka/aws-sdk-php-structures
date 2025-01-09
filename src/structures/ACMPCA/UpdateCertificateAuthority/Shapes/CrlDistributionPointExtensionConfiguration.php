<?php

namespace Sunaoka\Aws\Structures\ACMPCA\UpdateCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $OmitExtension
 */
class CrlDistributionPointExtensionConfiguration extends Shape
{
    /**
     * @param array{OmitExtension: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
