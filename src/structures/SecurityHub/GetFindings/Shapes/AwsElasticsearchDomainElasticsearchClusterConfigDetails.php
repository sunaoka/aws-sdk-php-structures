<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DedicatedMasterCount
 * @property bool $DedicatedMasterEnabled
 * @property string $DedicatedMasterType
 * @property int $InstanceCount
 * @property string $InstanceType
 * @property AwsElasticsearchDomainElasticsearchClusterConfigZoneAwarenessConfigDetails $ZoneAwarenessConfig
 * @property bool $ZoneAwarenessEnabled
 */
class AwsElasticsearchDomainElasticsearchClusterConfigDetails extends Shape
{
    /**
     * @param array{
     *     DedicatedMasterCount?: int,
     *     DedicatedMasterEnabled?: bool,
     *     DedicatedMasterType?: string,
     *     InstanceCount?: int,
     *     InstanceType?: string,
     *     ZoneAwarenessConfig?: AwsElasticsearchDomainElasticsearchClusterConfigZoneAwarenessConfigDetails,
     *     ZoneAwarenessEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
