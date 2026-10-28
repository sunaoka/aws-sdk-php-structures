<?php

namespace Sunaoka\Aws\Structures\Ec2\GetImageFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $FixAvailable
 * @property double|null $Score
 * @property \Aws\Api\DateTimeResult|null $FirstObservedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $Title
 * @property list<string>|null $Paths
 * @property 'informational'|'low'|'medium'|'high'|'critical'|null $SeverityLabel
 * @property string|null $SnapshotId
 */
class ImageFinding extends Shape
{
    /**
     * @param array{
     *     FixAvailable?: bool|null,
     *     Score?: double|null,
     *     FirstObservedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Title?: string|null,
     *     Paths?: list<string>|null,
     *     SeverityLabel?: 'informational'|'low'|'medium'|'high'|'critical'|null,
     *     SnapshotId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
