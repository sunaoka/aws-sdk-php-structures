<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateMitigationAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEACTIVATE' $action
 */
class UpdateDeviceCertificateParams extends Shape
{
    /**
     * @param array{action: 'DEACTIVATE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
