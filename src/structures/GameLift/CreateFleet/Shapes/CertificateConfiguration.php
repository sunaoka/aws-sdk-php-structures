<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'GENERATED' $CertificateType
 */
class CertificateConfiguration extends Shape
{
    /**
     * @param array{CertificateType: 'DISABLED'|'GENERATED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
