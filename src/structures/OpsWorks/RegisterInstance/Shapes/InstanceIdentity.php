<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Document
 * @property string|null $Signature
 */
class InstanceIdentity extends Shape
{
    /**
     * @param array{
     *     Document?: string|null,
     *     Signature?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
