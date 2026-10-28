<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'informational'|'low'|'medium'|'high'|'critical'|null $HighestFindingSeverityLabel
 * @property \Aws\Api\DateTimeResult|null $FindingScanDate
 * @property \Aws\Api\DateTimeResult|null $InformationalFixAvailableSince
 * @property \Aws\Api\DateTimeResult|null $LowFixAvailableSince
 * @property \Aws\Api\DateTimeResult|null $MediumFixAvailableSince
 * @property \Aws\Api\DateTimeResult|null $HighFixAvailableSince
 * @property \Aws\Api\DateTimeResult|null $CriticalFixAvailableSince
 */
class ScanResults extends Shape
{
    /**
     * @param array{
     *     HighestFindingSeverityLabel?: 'informational'|'low'|'medium'|'high'|'critical'|null,
     *     FindingScanDate?: \Aws\Api\DateTimeResult|null,
     *     InformationalFixAvailableSince?: \Aws\Api\DateTimeResult|null,
     *     LowFixAvailableSince?: \Aws\Api\DateTimeResult|null,
     *     MediumFixAvailableSince?: \Aws\Api\DateTimeResult|null,
     *     HighFixAvailableSince?: \Aws\Api\DateTimeResult|null,
     *     CriticalFixAvailableSince?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
