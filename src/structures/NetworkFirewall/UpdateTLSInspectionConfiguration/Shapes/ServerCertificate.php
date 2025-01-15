<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 */
class ServerCertificate extends Shape
{
    /**
     * @param array{ResourceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
