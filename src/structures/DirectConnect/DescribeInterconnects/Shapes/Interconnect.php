<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeInterconnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $interconnectId
 * @property string $interconnectName
 * @property 'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'unknown' $interconnectState
 * @property string $region
 * @property string $location
 * @property string $bandwidth
 * @property \Aws\Api\DateTimeResult $loaIssueTime
 * @property string $lagId
 * @property string $awsDevice
 * @property bool $jumboFrameCapable
 * @property string $awsDeviceV2
 * @property string $awsLogicalDeviceId
 * @property 'unknown'|'yes'|'no' $hasLogicalRedundancy
 * @property list<Tag> $tags
 * @property string $providerName
 */
class Interconnect extends Shape
{
    /**
     * @param array{
     *     interconnectId?: string,
     *     interconnectName?: string,
     *     interconnectState?: 'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'unknown',
     *     region?: string,
     *     location?: string,
     *     bandwidth?: string,
     *     loaIssueTime?: \Aws\Api\DateTimeResult,
     *     lagId?: string,
     *     awsDevice?: string,
     *     jumboFrameCapable?: bool,
     *     awsDeviceV2?: string,
     *     awsLogicalDeviceId?: string,
     *     hasLogicalRedundancy?: 'unknown'|'yes'|'no',
     *     tags?: list<Tag>,
     *     providerName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
