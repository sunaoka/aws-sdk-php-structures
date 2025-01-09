<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $LogGroup
 */
class VerifiedAccessLogCloudWatchLogsDestinationOptions extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     LogGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
