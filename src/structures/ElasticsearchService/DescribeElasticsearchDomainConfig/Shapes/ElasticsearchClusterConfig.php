<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'm3.medium.elasticsearch'|'m3.large.elasticsearch'|'m3.xlarge.elasticsearch'|'m3.2xlarge.elasticsearch'|'m4.large.elasticsearch'|'m4.xlarge.elasticsearch'|'m4.2xlarge.elasticsearch'|'m4.4xlarge.elasticsearch'|'m4.10xlarge.elasticsearch'|'m5.large.elasticsearch'|'m5.xlarge.elasticsearch'|'m5.2xlarge.elasticsearch'|'m5.4xlarge.elasticsearch'|'m5.12xlarge.elasticsearch'|'r5.large.elasticsearch'|'r5.xlarge.elasticsearch'|'r5.2xlarge.elasticsearch'|'r5.4xlarge.elasticsearch'|'r5.12xlarge.elasticsearch'|'c5.large.elasticsearch'|'c5.xlarge.elasticsearch'|'c5.2xlarge.elasticsearch'|'c5.4xlarge.elasticsearch'|'c5.9xlarge.elasticsearch'|'c5.18xlarge.elasticsearch'|'ultrawarm1.medium.elasticsearch'|'ultrawarm1.large.elasticsearch'|'t2.micro.elasticsearch'|'t2.small.elasticsearch'|'t2.medium.elasticsearch'|'r3.large.elasticsearch'|'r3.xlarge.elasticsearch'|'r3.2xlarge.elasticsearch'|'r3.4xlarge.elasticsearch'|'r3.8xlarge.elasticsearch'|'i2.xlarge.elasticsearch'|'i2.2xlarge.elasticsearch'|'d2.xlarge.elasticsearch'|'d2.2xlarge.elasticsearch'|'d2.4xlarge.elasticsearch'|'d2.8xlarge.elasticsearch'|'c4.large.elasticsearch'|'c4.xlarge.elasticsearch'|'c4.2xlarge.elasticsearch'|'c4.4xlarge.elasticsearch'|'c4.8xlarge.elasticsearch'|'r4.large.elasticsearch'|'r4.xlarge.elasticsearch'|'r4.2xlarge.elasticsearch'|'r4.4xlarge.elasticsearch'|'r4.8xlarge.elasticsearch'|'r4.16xlarge.elasticsearch'|'i3.large.elasticsearch'|'i3.xlarge.elasticsearch'|'i3.2xlarge.elasticsearch'|'i3.4xlarge.elasticsearch'|'i3.8xlarge.elasticsearch'|'i3.16xlarge.elasticsearch'|null $InstanceType
 * @property int|null $InstanceCount
 * @property bool|null $DedicatedMasterEnabled
 * @property bool|null $ZoneAwarenessEnabled
 * @property ZoneAwarenessConfig|null $ZoneAwarenessConfig
 * @property 'm3.medium.elasticsearch'|'m3.large.elasticsearch'|'m3.xlarge.elasticsearch'|'m3.2xlarge.elasticsearch'|'m4.large.elasticsearch'|'m4.xlarge.elasticsearch'|'m4.2xlarge.elasticsearch'|'m4.4xlarge.elasticsearch'|'m4.10xlarge.elasticsearch'|'m5.large.elasticsearch'|'m5.xlarge.elasticsearch'|'m5.2xlarge.elasticsearch'|'m5.4xlarge.elasticsearch'|'m5.12xlarge.elasticsearch'|'r5.large.elasticsearch'|'r5.xlarge.elasticsearch'|'r5.2xlarge.elasticsearch'|'r5.4xlarge.elasticsearch'|'r5.12xlarge.elasticsearch'|'c5.large.elasticsearch'|'c5.xlarge.elasticsearch'|'c5.2xlarge.elasticsearch'|'c5.4xlarge.elasticsearch'|'c5.9xlarge.elasticsearch'|'c5.18xlarge.elasticsearch'|'ultrawarm1.medium.elasticsearch'|'ultrawarm1.large.elasticsearch'|'t2.micro.elasticsearch'|'t2.small.elasticsearch'|'t2.medium.elasticsearch'|'r3.large.elasticsearch'|'r3.xlarge.elasticsearch'|'r3.2xlarge.elasticsearch'|'r3.4xlarge.elasticsearch'|'r3.8xlarge.elasticsearch'|'i2.xlarge.elasticsearch'|'i2.2xlarge.elasticsearch'|'d2.xlarge.elasticsearch'|'d2.2xlarge.elasticsearch'|'d2.4xlarge.elasticsearch'|'d2.8xlarge.elasticsearch'|'c4.large.elasticsearch'|'c4.xlarge.elasticsearch'|'c4.2xlarge.elasticsearch'|'c4.4xlarge.elasticsearch'|'c4.8xlarge.elasticsearch'|'r4.large.elasticsearch'|'r4.xlarge.elasticsearch'|'r4.2xlarge.elasticsearch'|'r4.4xlarge.elasticsearch'|'r4.8xlarge.elasticsearch'|'r4.16xlarge.elasticsearch'|'i3.large.elasticsearch'|'i3.xlarge.elasticsearch'|'i3.2xlarge.elasticsearch'|'i3.4xlarge.elasticsearch'|'i3.8xlarge.elasticsearch'|'i3.16xlarge.elasticsearch'|null $DedicatedMasterType
 * @property int|null $DedicatedMasterCount
 * @property bool|null $WarmEnabled
 * @property 'ultrawarm1.medium.elasticsearch'|'ultrawarm1.large.elasticsearch'|null $WarmType
 * @property int|null $WarmCount
 * @property ColdStorageOptions|null $ColdStorageOptions
 */
class ElasticsearchClusterConfig extends Shape
{
    /**
     * @param array{
     *     InstanceType?: 'm3.medium.elasticsearch'|'m3.large.elasticsearch'|'m3.xlarge.elasticsearch'|'m3.2xlarge.elasticsearch'|'m4.large.elasticsearch'|'m4.xlarge.elasticsearch'|'m4.2xlarge.elasticsearch'|'m4.4xlarge.elasticsearch'|'m4.10xlarge.elasticsearch'|'m5.large.elasticsearch'|'m5.xlarge.elasticsearch'|'m5.2xlarge.elasticsearch'|'m5.4xlarge.elasticsearch'|'m5.12xlarge.elasticsearch'|'r5.large.elasticsearch'|'r5.xlarge.elasticsearch'|'r5.2xlarge.elasticsearch'|'r5.4xlarge.elasticsearch'|'r5.12xlarge.elasticsearch'|'c5.large.elasticsearch'|'c5.xlarge.elasticsearch'|'c5.2xlarge.elasticsearch'|'c5.4xlarge.elasticsearch'|'c5.9xlarge.elasticsearch'|'c5.18xlarge.elasticsearch'|'ultrawarm1.medium.elasticsearch'|'ultrawarm1.large.elasticsearch'|'t2.micro.elasticsearch'|'t2.small.elasticsearch'|'t2.medium.elasticsearch'|'r3.large.elasticsearch'|'r3.xlarge.elasticsearch'|'r3.2xlarge.elasticsearch'|'r3.4xlarge.elasticsearch'|'r3.8xlarge.elasticsearch'|'i2.xlarge.elasticsearch'|'i2.2xlarge.elasticsearch'|'d2.xlarge.elasticsearch'|'d2.2xlarge.elasticsearch'|'d2.4xlarge.elasticsearch'|'d2.8xlarge.elasticsearch'|'c4.large.elasticsearch'|'c4.xlarge.elasticsearch'|'c4.2xlarge.elasticsearch'|'c4.4xlarge.elasticsearch'|'c4.8xlarge.elasticsearch'|'r4.large.elasticsearch'|'r4.xlarge.elasticsearch'|'r4.2xlarge.elasticsearch'|'r4.4xlarge.elasticsearch'|'r4.8xlarge.elasticsearch'|'r4.16xlarge.elasticsearch'|'i3.large.elasticsearch'|'i3.xlarge.elasticsearch'|'i3.2xlarge.elasticsearch'|'i3.4xlarge.elasticsearch'|'i3.8xlarge.elasticsearch'|'i3.16xlarge.elasticsearch'|null,
     *     InstanceCount?: int|null,
     *     DedicatedMasterEnabled?: bool|null,
     *     ZoneAwarenessEnabled?: bool|null,
     *     ZoneAwarenessConfig?: ZoneAwarenessConfig|null,
     *     DedicatedMasterType?: 'm3.medium.elasticsearch'|'m3.large.elasticsearch'|'m3.xlarge.elasticsearch'|'m3.2xlarge.elasticsearch'|'m4.large.elasticsearch'|'m4.xlarge.elasticsearch'|'m4.2xlarge.elasticsearch'|'m4.4xlarge.elasticsearch'|'m4.10xlarge.elasticsearch'|'m5.large.elasticsearch'|'m5.xlarge.elasticsearch'|'m5.2xlarge.elasticsearch'|'m5.4xlarge.elasticsearch'|'m5.12xlarge.elasticsearch'|'r5.large.elasticsearch'|'r5.xlarge.elasticsearch'|'r5.2xlarge.elasticsearch'|'r5.4xlarge.elasticsearch'|'r5.12xlarge.elasticsearch'|'c5.large.elasticsearch'|'c5.xlarge.elasticsearch'|'c5.2xlarge.elasticsearch'|'c5.4xlarge.elasticsearch'|'c5.9xlarge.elasticsearch'|'c5.18xlarge.elasticsearch'|'ultrawarm1.medium.elasticsearch'|'ultrawarm1.large.elasticsearch'|'t2.micro.elasticsearch'|'t2.small.elasticsearch'|'t2.medium.elasticsearch'|'r3.large.elasticsearch'|'r3.xlarge.elasticsearch'|'r3.2xlarge.elasticsearch'|'r3.4xlarge.elasticsearch'|'r3.8xlarge.elasticsearch'|'i2.xlarge.elasticsearch'|'i2.2xlarge.elasticsearch'|'d2.xlarge.elasticsearch'|'d2.2xlarge.elasticsearch'|'d2.4xlarge.elasticsearch'|'d2.8xlarge.elasticsearch'|'c4.large.elasticsearch'|'c4.xlarge.elasticsearch'|'c4.2xlarge.elasticsearch'|'c4.4xlarge.elasticsearch'|'c4.8xlarge.elasticsearch'|'r4.large.elasticsearch'|'r4.xlarge.elasticsearch'|'r4.2xlarge.elasticsearch'|'r4.4xlarge.elasticsearch'|'r4.8xlarge.elasticsearch'|'r4.16xlarge.elasticsearch'|'i3.large.elasticsearch'|'i3.xlarge.elasticsearch'|'i3.2xlarge.elasticsearch'|'i3.4xlarge.elasticsearch'|'i3.8xlarge.elasticsearch'|'i3.16xlarge.elasticsearch'|null,
     *     DedicatedMasterCount?: int|null,
     *     WarmEnabled?: bool|null,
     *     WarmType?: 'ultrawarm1.medium.elasticsearch'|'ultrawarm1.large.elasticsearch'|null,
     *     WarmCount?: int|null,
     *     ColdStorageOptions?: ColdStorageOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
