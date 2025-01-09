<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogDestinationConfig> $LogDestinationConfigs
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{LogDestinationConfigs: list<LogDestinationConfig>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
