<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreatModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaCertificateSource $source
 */
class TrustedCaCertificate extends Shape
{
    /**
     * @param array{source: CaCertificateSource} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
