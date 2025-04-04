<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ARecord
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property string|null $IngressPointArn
 * @property Shapes\IngressPointAuthConfiguration|null $IngressPointAuthConfiguration
 * @property string $IngressPointId
 * @property string $IngressPointName
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property Shapes\NetworkConfiguration|null $NetworkConfiguration
 * @property string|null $RuleSetId
 * @property 'PROVISIONING'|'DEPROVISIONING'|'UPDATING'|'ACTIVE'|'CLOSED'|'FAILED'|null $Status
 * @property string|null $TrafficPolicyId
 * @property 'OPEN'|'AUTH'|null $Type
 */
class GetIngressPointResponse extends Response
{
}
