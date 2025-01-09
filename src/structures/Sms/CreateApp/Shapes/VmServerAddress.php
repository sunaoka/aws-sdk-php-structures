<?php

namespace Sunaoka\Aws\Structures\Sms\CreateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vmManagerId
 * @property string $vmId
 */
class VmServerAddress extends Shape
{
    /**
     * @param array{
     *     vmManagerId?: string,
     *     vmId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
