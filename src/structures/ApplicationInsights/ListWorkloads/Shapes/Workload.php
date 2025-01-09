<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListWorkloads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkloadId
 * @property string $ComponentName
 * @property string $WorkloadName
 * @property 'CUSTOM'|'DEFAULT'|'DOT_NET_CORE'|'DOT_NET_WORKER'|'DOT_NET_WEB_TIER'|'DOT_NET_WEB'|'SQL_SERVER'|'SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'|'MYSQL'|'POSTGRESQL'|'JAVA_JMX'|'ORACLE'|'SAP_HANA_MULTI_NODE'|'SAP_HANA_SINGLE_NODE'|'SAP_HANA_HIGH_AVAILABILITY'|'SAP_ASE_SINGLE_NODE'|'SAP_ASE_HIGH_AVAILABILITY'|'SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'|'SHAREPOINT'|'ACTIVE_DIRECTORY'|'SAP_NETWEAVER_STANDARD'|'SAP_NETWEAVER_DISTRIBUTED'|'SAP_NETWEAVER_HIGH_AVAILABILITY' $Tier
 * @property string $WorkloadRemarks
 * @property bool $MissingWorkloadConfig
 */
class Workload extends Shape
{
    /**
     * @param array{
     *     WorkloadId?: string,
     *     ComponentName?: string,
     *     WorkloadName?: string,
     *     Tier?: 'CUSTOM'|'DEFAULT'|'DOT_NET_CORE'|'DOT_NET_WORKER'|'DOT_NET_WEB_TIER'|'DOT_NET_WEB'|'SQL_SERVER'|'SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'|'MYSQL'|'POSTGRESQL'|'JAVA_JMX'|'ORACLE'|'SAP_HANA_MULTI_NODE'|'SAP_HANA_SINGLE_NODE'|'SAP_HANA_HIGH_AVAILABILITY'|'SAP_ASE_SINGLE_NODE'|'SAP_ASE_HIGH_AVAILABILITY'|'SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'|'SHAREPOINT'|'ACTIVE_DIRECTORY'|'SAP_NETWEAVER_STANDARD'|'SAP_NETWEAVER_DISTRIBUTED'|'SAP_NETWEAVER_HIGH_AVAILABILITY',
     *     WorkloadRemarks?: string,
     *     MissingWorkloadConfig?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
