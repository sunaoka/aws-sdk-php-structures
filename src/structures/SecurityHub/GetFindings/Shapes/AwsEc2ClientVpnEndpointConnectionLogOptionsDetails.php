<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $CloudwatchLogGroup
 * @property string $CloudwatchLogStream
 */
class AwsEc2ClientVpnEndpointConnectionLogOptionsDetails extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     CloudwatchLogGroup?: string,
     *     CloudwatchLogStream?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
