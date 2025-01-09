<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListNetworkAnalyzerConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 */
class NetworkAnalyzerConfigurations extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
