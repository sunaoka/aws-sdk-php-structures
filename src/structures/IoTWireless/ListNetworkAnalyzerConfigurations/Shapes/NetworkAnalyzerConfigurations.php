<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListNetworkAnalyzerConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 */
class NetworkAnalyzerConfigurations extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
