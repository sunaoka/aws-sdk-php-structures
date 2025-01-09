<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListLinuxSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InstanceCount
 * @property string $Name
 * @property string $Type
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int,
     *     Name?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
