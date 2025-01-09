<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEACTIVATE' $action
 */
class UpdateCACertificateParams extends Shape
{
    /**
     * @param array{action: 'DEACTIVATE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
