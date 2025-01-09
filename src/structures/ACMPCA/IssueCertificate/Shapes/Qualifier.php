<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CpsUri
 */
class Qualifier extends Shape
{
    /**
     * @param array{CpsUri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
