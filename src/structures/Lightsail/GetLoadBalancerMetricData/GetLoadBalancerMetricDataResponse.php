<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ClientTLSNegotiationErrorCount'|'HealthyHostCount'|'UnhealthyHostCount'|'HTTPCode_LB_4XX_Count'|'HTTPCode_LB_5XX_Count'|'HTTPCode_Instance_2XX_Count'|'HTTPCode_Instance_3XX_Count'|'HTTPCode_Instance_4XX_Count'|'HTTPCode_Instance_5XX_Count'|'InstanceResponseTime'|'RejectedConnectionCount'|'RequestCount' $metricName
 * @property list<Shapes\MetricDatapoint> $metricData
 */
class GetLoadBalancerMetricDataResponse extends Response
{
}
