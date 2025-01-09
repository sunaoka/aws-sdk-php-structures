<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListServiceProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Id
 */
class ServiceProfile extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Name?: string,
     *     Id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
