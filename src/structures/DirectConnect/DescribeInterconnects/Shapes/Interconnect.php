<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeInterconnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $interconnectId
 * @property string|null $interconnectName
 * @property 'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'unknown'|null $interconnectState
 * @property string|null $region
 * @property string|null $location
 * @property string|null $bandwidth
 * @property \Aws\Api\DateTimeResult|null $loaIssueTime
 * @property string|null $lagId
 * @property string|null $awsDevice
 * @property bool|null $jumboFrameCapable
 * @property string|null $awsDeviceV2
 * @property string|null $awsLogicalDeviceId
 * @property 'unknown'|'yes'|'no'|null $hasLogicalRedundancy
 * @property list<Tag>|null $tags
 * @property string|null $providerName
 */
class Interconnect extends Shape
{
    /**
     * @param array{
     *     interconnectId?: string|null,
     *     interconnectName?: string|null,
     *     interconnectState?: 'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'unknown'|null,
     *     region?: string|null,
     *     location?: string|null,
     *     bandwidth?: string|null,
     *     loaIssueTime?: \Aws\Api\DateTimeResult|null,
     *     lagId?: string|null,
     *     awsDevice?: string|null,
     *     jumboFrameCapable?: bool|null,
     *     awsDeviceV2?: string|null,
     *     awsLogicalDeviceId?: string|null,
     *     hasLogicalRedundancy?: 'unknown'|'yes'|'no'|null,
     *     tags?: list<Tag>|null,
     *     providerName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
