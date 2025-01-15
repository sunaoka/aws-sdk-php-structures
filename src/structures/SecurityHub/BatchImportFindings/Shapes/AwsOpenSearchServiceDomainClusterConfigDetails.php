<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InstanceCount
 * @property bool|null $WarmEnabled
 * @property int|null $WarmCount
 * @property bool|null $DedicatedMasterEnabled
 * @property AwsOpenSearchServiceDomainClusterConfigZoneAwarenessConfigDetails|null $ZoneAwarenessConfig
 * @property int|null $DedicatedMasterCount
 * @property string|null $InstanceType
 * @property string|null $WarmType
 * @property bool|null $ZoneAwarenessEnabled
 * @property string|null $DedicatedMasterType
 */
class AwsOpenSearchServiceDomainClusterConfigDetails extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int|null,
     *     WarmEnabled?: bool|null,
     *     WarmCount?: int|null,
     *     DedicatedMasterEnabled?: bool|null,
     *     ZoneAwarenessConfig?: AwsOpenSearchServiceDomainClusterConfigZoneAwarenessConfigDetails|null,
     *     DedicatedMasterCount?: int|null,
     *     InstanceType?: string|null,
     *     WarmType?: string|null,
     *     ZoneAwarenessEnabled?: bool|null,
     *     DedicatedMasterType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
