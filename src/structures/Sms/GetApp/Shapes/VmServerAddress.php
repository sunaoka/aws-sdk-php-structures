<?php

namespace Sunaoka\Aws\Structures\Sms\GetApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vmManagerId
 * @property string|null $vmId
 */
class VmServerAddress extends Shape
{
    /**
     * @param array{
     *     vmManagerId?: string|null,
     *     vmId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
