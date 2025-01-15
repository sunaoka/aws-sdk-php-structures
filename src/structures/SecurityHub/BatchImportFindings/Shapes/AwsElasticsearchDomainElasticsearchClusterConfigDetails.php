<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DedicatedMasterCount
 * @property bool|null $DedicatedMasterEnabled
 * @property string|null $DedicatedMasterType
 * @property int|null $InstanceCount
 * @property string|null $InstanceType
 * @property AwsElasticsearchDomainElasticsearchClusterConfigZoneAwarenessConfigDetails|null $ZoneAwarenessConfig
 * @property bool|null $ZoneAwarenessEnabled
 */
class AwsElasticsearchDomainElasticsearchClusterConfigDetails extends Shape
{
    /**
     * @param array{
     *     DedicatedMasterCount?: int|null,
     *     DedicatedMasterEnabled?: bool|null,
     *     DedicatedMasterType?: string|null,
     *     InstanceCount?: int|null,
     *     InstanceType?: string|null,
     *     ZoneAwarenessConfig?: AwsElasticsearchDomainElasticsearchClusterConfigZoneAwarenessConfigDetails|null,
     *     ZoneAwarenessEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
