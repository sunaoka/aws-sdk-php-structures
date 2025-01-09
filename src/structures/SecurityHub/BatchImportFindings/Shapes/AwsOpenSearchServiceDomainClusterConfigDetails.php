<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InstanceCount
 * @property bool $WarmEnabled
 * @property int $WarmCount
 * @property bool $DedicatedMasterEnabled
 * @property AwsOpenSearchServiceDomainClusterConfigZoneAwarenessConfigDetails $ZoneAwarenessConfig
 * @property int $DedicatedMasterCount
 * @property string $InstanceType
 * @property string $WarmType
 * @property bool $ZoneAwarenessEnabled
 * @property string $DedicatedMasterType
 */
class AwsOpenSearchServiceDomainClusterConfigDetails extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int,
     *     WarmEnabled?: bool,
     *     WarmCount?: int,
     *     DedicatedMasterEnabled?: bool,
     *     ZoneAwarenessConfig?: AwsOpenSearchServiceDomainClusterConfigZoneAwarenessConfigDetails,
     *     DedicatedMasterCount?: int,
     *     InstanceType?: string,
     *     WarmType?: string,
     *     ZoneAwarenessEnabled?: bool,
     *     DedicatedMasterType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
