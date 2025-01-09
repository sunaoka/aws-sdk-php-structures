<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudWatchLogsLogGroupArn
 * @property bool $Enabled
 */
class AwsOpenSearchServiceDomainLogPublishingOption extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsLogGroupArn?: string,
     *     Enabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
