<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Document
 * @property string $Signature
 */
class InstanceIdentity extends Shape
{
    /**
     * @param array{
     *     Document?: string,
     *     Signature?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
